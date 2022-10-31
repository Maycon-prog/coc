<?php
namespace Elementor;

class My_Widget_3 extends Widget_Base {
	
	public function get_name() {
		return 'iframe';
	}
	
	public function get_title() {
		return 'iframe';
	}
	
	public function get_icon() {
		return 'fa fa-font';
	}
	
	public function get_categories() {
		return [ 'basic' ];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Content', 'elementor' ),
			]
		);
		
        $this->add_control(
			'texto',
			[
				'label' => __( 'texto', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Insira um texto alternativo pro vídeo:', 'elementor' ),
                'default' => '',
			]
		);

		$this->add_control(
			'Link',
			[
				'label' => __( 'Link', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'Insira o link embed do vídeo:', 'elementor' ),
                'default' => [
					'url' => 'https://www.youtube.com/embed/9_V-1mM1j1c',
					'is_external' => false,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
			]
		);
        
		$this->end_controls_section();
	}
	
	protected function render() {

        $settings = $this->get_settings_for_display();

        echo "<iframe width='560' height='315' src='". $settings['Link']['url'] ."' title='YouTube video player' frameborder='0' alt='$settings[texto]' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
	}
	
	protected function _content_template() {

    }
	
	
}