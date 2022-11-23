<?php

namespace Elementor;

class imagem extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'img';
    }

    public function get_title()
    {
        return 'Imagem';
    }

    public function get_icon()
    {
        return 'eicon-image';
    }

    public function get_categories()
    {
        return ['widgets-personalizados'];
    }

    protected function register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'textdomain'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => esc_html__('Choose Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'legenda',
            [
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'label' => esc_html__('Legenda da Imagem', 'textdomain'),
                'placeholder' => esc_html__('Enter your legend', 'textdomain'),
                'default' => 'Sou uma legenda!',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
         <figure>
            <img src="<?=$settings['image']['url']?>" alt="<?=$settings['image']['alt']?>" class="img">
            <figcaption><?=get_post($settings['image']['id'])->post_excerpt?></figcaption>
        </figure>
        <?php
        print_r($settings);
        print_r(get_post($settings['image']['id']));
    }

    protected function content_template()
    {
    }
}
