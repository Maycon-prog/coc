<?php
namespace Elementor;

class My_Widget_1 extends Widget_Base {
	
	public function get_name() {
		return 'texto';
	}
	
	public function get_title() {
		return 'texto';
	}
	
	public function get_icon() {
		return 'fa fa-font';
	}
	
	public function get_categories() {
		return ['widgets-personalizados'];
	}
	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Content', 'elementor' ),
			]
		);
		
		$this->add_control(
			'Texto',
			[
				'label' => __( 'Texto', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Insira um texto:', 'elementor' ),
			]
		);

		$this->end_controls_section();
	}
	
	protected function render() {

        $settings = $this->get_settings_for_display();

		echo "<p lang='pt' class='texto textao'>$settings[Texto]</p>";
		
	}
	
	protected function _content_template() {

    }
	
	
}