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

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
         <figure>
            <img src="<?=$settings['image']['url']?>" alt="<?=$settings['image']['alt']?>" class="img">
            <figcaption><?=wp_get_attachment_caption($settings['image']['id'])?></figcaption>
        </figure>
        <?php
    }

    protected function content_template()
    {
    }
}
