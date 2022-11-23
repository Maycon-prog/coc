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
			'id',
			[
				'label' => esc_html__( 'View', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::HIDDEN,
				'default' => uniqid("imageId_"),
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
			'alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Legend alignment', 'textdomain' ),
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'textdomain' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'textdomain' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'textdomain' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
			]
		);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        print_r($settings['id']);
        print_r($settings);
        ?>
         <figure>
            <img src="<?=$settings['image']['url']?>" alt="<?=$settings['image']['alt']?>" class="img">
            <figcaption class="<?=$settings['alignment']?>"><?=wp_get_attachment_caption($settings['image']['id'])?></figcaption>
        </figure>
        <?php
    }

    protected function content_template()
    {
    }
}
