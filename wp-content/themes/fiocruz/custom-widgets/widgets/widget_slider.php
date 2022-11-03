<?php

namespace Elementor;

class widget_slider extends Widget_Base
{

    public function get_name()
    {
        return 'slider'; // nome para usar no código
    }

    public function get_title()
    {
        return 'Slider'; // nome para o usuario
    }

    public function get_icon()
    {
        return 'eicon-slides'; // https://elementor.github.io/elementor-icons/
    }

    public function get_categories()
    {
        return ['widgets-personalizados'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_title',
            [
                'label' => esc_html__('Title', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('List Title', 'elementor'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_content',
            [
                'label' => esc_html__('Content', 'elementor'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__('List Content', 'elementor'),
                'show_label' => false,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__('Repeater List', 'elementor'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_title' => esc_html__('Slide #1', 'elementor'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'elementor'),
                    ],
                    [
                        'list_title' => esc_html__('Slide #2', 'elementor'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'elementor'),
                    ],
                    [
                        'list_title' => esc_html__('Slide #3', 'elementor'),
                        'list_content' => esc_html__('Item content. Click the edit button to change this text.', 'elementor'),
                    ]
                ],
                'title_field' => '{{{ list_title }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'style_marker_section',
            [
                'label' => esc_html__('Marker Style', 'elementor-list-widget'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'marker_color',
            [
                'label' => esc_html__('Background', 'elementor-list-widget'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementor-list-widget-text::marker' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
?>      
        <section id="splide" data-splide='{"type":"loop","perPage":1}' class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    for ($i = 0; $i < count($settings['list']); $i++) {
                    ?>
                        <li class="splide__slide">
                            <h2 class="slide-title texto"><?= $settings['list'][$i]['list_title'] ?></h2>
                            <p class="slide-content texto"><?= $settings['list'][$i]['list_content'] ?></p>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
<?php
    }

    protected function _content_template()
    {
    }
}
