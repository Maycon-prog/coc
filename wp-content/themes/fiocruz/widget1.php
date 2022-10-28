<?php
namespace Elementor;

class My_Widget_1 extends Widget_Base {
	
	public function get_name() {
		return 'title-subtitle';
	}
	
	public function get_title() {
		return 'title & sub-title';
	}
	
	public function get_icon() {
		return '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
      </svg>';
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
			'title',
			[
				'label' => __( 'Title', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your title', 'elementor' ),
			]
		);

		$this->add_control(
			'subtitle',
			[
				'label' => __( 'Sub-title', 'elementor' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
                'placeholder' => __( 'Enter your sub-title', 'elementor' ),
			]
		);

		$this->add_control(
			'link',
			[
				'label' => __( 'Link', 'elementor' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'elementor' ),
				'default' => [
					'url' => '',
				]
			]
		);

		$this->end_controls_section();
	}
	
	protected function render() {

        $settings = $this->get_settings_for_display();
        $url = $settings['link']['url'];
		echo  "<a href='$url'><div class='title'>$settings[title]</div> <div class='subtitle'>$settings[subtitle]</div></a>";
		 

	}
	
	protected function _content_template() {

    }
	
	
}