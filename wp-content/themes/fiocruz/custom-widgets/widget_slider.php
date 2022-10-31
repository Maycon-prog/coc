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
            'section_title',
            [
                'label' => __('Content', 'elementor'),
            ]
        );

        $this->add_control(
            'Antecede',
            [
                'label' => __('Antecede', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Insira o texto que antecede o link:', 'elementor'),
                'default' => '',
            ]
        );

        $this->add_control(
            'Link',
            [
                'label' => __('Link', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::URL,
                'placeholder' => __('Insira um Link:', 'elementor'),
                'default' => [
                    'url' => '',
                    'is_external' => false,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
            ]
        );

        $this->add_control(
            'Texto',
            [
                'label' => __('Texto', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Insira o texto do link:', 'elementor'),
            ]
        );

        $this->add_control(
            'Sucede',
            [
                'label' => __('Sucede', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Insira o texto que sucede o link:', 'elementor'),
                'default' => '',
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
                    <li class="splide__slide">
                        slider 1
                    </li>
                    <li class="splide__slide">
                        slider 2
                    </li>
                    <li class="splide__slide">
                        slider 3
                    </li>
                </ul>
            </div>
        </section>
        <style>
            .prev {
                width: 0;
                height: 0;
                border-top: 50px solid transparent;
                border-bottom: 50px solid transparent;
                border-left: 50px solid #ABA8B2;
            }

            .next {
                width: 0;
                height: 0;
                border-top: 50px solid transparent;
                border-bottom: 50px solid transparent;
                border-right: 50px solid #ABA8B2;
            }
            .splide__arrow{
                background: none !important;
            }
        </style>
<?php
    }

    protected function _content_template()
    {
    }
}
