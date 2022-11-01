<?php

namespace Elementor;

class widget_slider extends Widget_Base
{

    public function get_name() {
		return 'arrow_repeater';
	}

	public function get_title() {
		return __( 'Arrow Repeater', 'elementor' );
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_image',
			[
				'label' => __( 'Image', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'list_title', [
				'label' => __( 'Title', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'List Title' , 'plugin-domain' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'list_content', [
				'label' => __( 'Content', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'List Content' , 'plugin-domain' ),
				'show_label' => false,
			]
		);
		$repeater->add_control(
			'list_link', [
				'label' => __( 'Link', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '#' , 'plugin-domain' ),
				'show_label' => true,
			]
		);

		$this->add_control(
			'list',
			[
				'label' => __( 'Repeater List', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_image' => __( 'Item Image', 'plugin-domain' ),
						'list_title' => __( 'Item Title', 'plugin-domain' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
						'list_link' => __( 'Link', 'plugin-domain' ),

					],
					[
						'list_image' => __( 'Item Image', 'plugin-domain' ),
						'list_title' => __( 'Item Title', 'plugin-domain' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
						'list_link' => __( 'Link', 'plugin-domain' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
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
                        <h2 class="slide-title">Titulo do Slide 1</h2>
                        <p class="slide-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </li>
                    <li class="splide__slide">
                        <h2 class="slide-title">Titulo do Slide 1</h2>
                        <p class="slide-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </li>
                </ul>
            </div>
        </section> 
<?php
    }

    protected function _content_template()
    {
    }
}
