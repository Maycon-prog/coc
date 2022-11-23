<?php
namespace Elementor;

class title extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'title';
    }

    public function get_title()
    {
        return 'Title';
    }

    public function get_icon()
    {
        return 'eicon-site-title';
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
				'label' => esc_html__( 'Content', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
            'title',
            [
                'type' => \Elementor\Controls_Manager::TEXT,
                'label' => esc_html__('Title', 'textdomain'),
                'placeholder' => esc_html__('Enter your title', 'textdomain'),
                'default' => 'Isso é um titulo!',
            ]
        );

        $this->add_control(
			'alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Alignment', 'textdomain' ),
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

        $this->add_control(
			'type',
			[
				'type' => \Elementor\Controls_Manager::SELECT,
				'label' => esc_html__( 'Type', 'textdomain' ),
				'options' => [
					'h1' => esc_html__( 'h1', 'textdomain' ),
					'h2' => esc_html__( 'h2', 'textdomain' ),
                    'h3' => esc_html__( 'h3', 'textdomain' ),
                    'h4' => esc_html__( 'h4', 'textdomain' ),
                    'h5' => esc_html__( 'h5', 'textdomain' ),
                    'h6' => esc_html__( 'h6', 'textdomain' ),
				],
				'default' => 'h2',
			]
		);

        $this->end_controls_section();
    }

    protected function render()
    {
        $title = $this->get_settings_for_display('title');
        $aligment = $this->get_settings_for_display('alignment');
        $type = $this->get_settings_for_display('type');
        echo "<$type class='$aligment'>$title</$type>"; 
    }

    protected function content_template()
    {
    }
}
