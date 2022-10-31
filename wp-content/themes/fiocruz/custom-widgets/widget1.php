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
			'Texto',
			[
				'label' => __( 'Texto', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Insira um texto:', 'elementor' ),
			]
		);

		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Style', 'elementor' ),
			]
		);
		
		$this->add_control(
			'Cor',
			[
				'label' => __( 'Cor', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::COLOR,
				'default' => '#000',
				'placeholder' => __( 'Insira cor para um texto:', 'elementor' ),
			]
		);

		$this->add_control(
			'Fonte',
			[
				'label' => __( 'Fonte', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::FONT,
				'selectors' => [
					'{{WRAPPER}} p' => 'text-align: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}
	
	protected function render() {

        $settings = $this->get_settings_for_display();

		?>

		<p lang="pt" style="color: <?php echo $settings['Cor']; ?>; "><?php echo $settings['Texto']; ?></p>

		<?php
		
	}
	
	protected function _content_template() {

    }
	
	
}