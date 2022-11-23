<?php

namespace Elementor;

class widget_slider_bootstrap extends Widget_Base
{

    public function get_name()
    {
        return 'slider_bootstrap'; // nome para usar no código
    }

    public function get_title()
    {
        return 'Slider Boostrap'; // nome para o usuario
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
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $id = uniqid("slider_");
?>
            <div id="<?=$id?>" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
            <ol class="carousel-indicators">
                <li data-target="<?=$id?>" data-slide-to="0" class="active"></li>
                <li data-target="<?=$id?>" data-slide-to="1"></li>
                <li data-target="<?=$id?>" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" tabindex="0">
                    <h2>Teste de leitura</h2>
                </div>
                <div class="carousel-item" tabindex="0">
                    <h2>2</h2>
                </div>
                <div class="carousel-item" tabindex="0">
                    <h2>3</h2>
                </div>
            </div>
            <a class="carousel-control-prev" href="<?="#".$id?>" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="<?="#".$id?>" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

<?php
    }

    protected function _content_template()
    {
    }
}