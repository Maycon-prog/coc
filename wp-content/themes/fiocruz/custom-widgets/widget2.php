<?php
namespace Elementor;

class My_Widget_2 extends Widget_Base {
	
	public function get_name() {
		return 'link';
	}
	
	public function get_title() {
		return 'link ancora';
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
			'Antecede',
			[
				'label' => __( 'Antecede', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Insira o texto que antecede o link:', 'elementor' ),
			]
		);

		$this->add_control(
			'Link',
			[
				'label' => __( 'Link', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::LINK,
				'placeholder' => __( 'Insira um Link:', 'elementor' ),
			]
		);

        $this->add_control(
			'Texto',
			[
				'label' => __( 'Texto', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Insira o texto do link:', 'elementor' ),
			]
		);

        $this->add_control(
			'Sucede',
			[
				'label' => __( 'Sucede', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Insira o texto que sucede o link:', 'elementor' ),
			]
		);

        $this->add_control(
			'Blank',
			[
				'label' => esc_html__( 'Link blank?', 'elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Sim', 'elementor' ),
				'label_off' => esc_html__( 'Não', 'elementor' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->end_controls_section();
	}
	
	protected function render() {

        $settings = $this->get_settings_for_display();

        echo "<a href='$settings[Link]'>$settings[Texto]</a>";

	}
	
	protected function _content_template() {

    }
	
	
}