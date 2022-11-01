<?php

namespace Elementor;

class widget_slider extends Widget_Base
{

    public function get_name()
    {
        return 'Slider';
    }

    public function get_title()
    {
        return 'Slider';
    }

    public function get_icon()
    {
        return 'fa fa-font';
    }

    public function get_categories()
    {
        return ['basic'];
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
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
?>
        <section id="splide" class="splide" aria-label="Beautiful Images">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    for ($i = 0; $i < count($settings['list']); $i++) {
                    ?>
                        <li class="splide__slide">
                            <h2 class="slide-title"><?=$settings['list'][$i]['list_title']?></h2>
                            <p class="slide-content"><?=$settings['list'][$i]['list_content']?></p>
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
