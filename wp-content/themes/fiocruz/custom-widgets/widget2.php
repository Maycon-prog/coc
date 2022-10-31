<?php
namespace Elementor;

class My_Widget_1 extends Widget_Base {
	
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
                'default' => '',
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
                'default' => '',
			]
		);

        $this->add_control(
			'Blank',
			[
				'label' => esc_html__( 'Link blank?', 'elementor' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
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

        if( ($settings['Sucede'] == '') && ($settings['Antecede'] == '') ) {
            if ( 'yes' === $settings['Blank'] ) {
                echo "<a href='$settings[Link]' target='_blank' rel='noopener'>$settings[Texto]</a>";
            } else {
                echo "<a href='$settings[Link]'>$settings[Texto]</a>";
            }

        } else if (($settings['Sucede'] != '') && ($settings['Antecede'] == '')) {
            if ( 'yes' === $settings['Blank'] ) {
                echo "<p><a href='$settings[Link]' target='_blank' rel='noopener'>$settings[Texto]</a> $settings[Sucede]</p>";
            } else {
                echo "<p><a href='$settings[Link]'>$settings[Texto]</a> $settings[Sucede]</p>";
            }

        } else if (($settings['Sucede'] == '') && ($settings['Antecede'] != '')) {
            if ( 'yes' === $settings['Blank'] ) {
                echo "<p>$settings[Antecede] <a href='$settings[Link]' target='_blank' rel='noopener'>$settings[Texto]</a></p>";
            } else {
                echo "<p>$settings[Antecede] <a href='$settings[Link]'>$settings[Texto]</a></p>";
            }
            
        } else {
            if ( 'yes' === $settings['Blank'] ) {
                echo "<p>$settings[Antecede] <a href='$settings[Link]' target='_blank' rel='noopener'>$settings[Texto]</a> $settings[Sucede]</p>";
            } else {
                echo "<p>$settings[Antecede] <a href='$settings[Link]'>$settings[Texto]</a> $settings[Sucede]</p>";
            }
        }
	}
	
	protected function _content_template() {

    }
	
	
}