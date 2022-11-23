<?php

class My_Elementor_Widgets
{

	protected static $instance = null;

	public static function get_instance()
	{
		if (!isset(static::$instance)) {
			static::$instance = new static;
		}

		return static::$instance;
	}

	protected function __construct()
	{
		require_once('widgets/widget1.php');
		$short_dir = get_stylesheet_directory() . '/custom-widgets/widgets';
		$myfiles = array_diff(scandir($short_dir), array('.', '..'));
		foreach ($myfiles as $file) {
			require_once('widgets/'.$file);

		}
		add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets']);
	}

	public function register_widgets()
	{	
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\My_Widget_1());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\My_Widget_2());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\My_Widget_3());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\title());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\imagem());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\widget_slider());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\widget_relacionado());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \Elementor\widget_slider_bootstrap());
	}
}

add_action('init', 'my_elementor_init');
function my_elementor_init()
{
	My_Elementor_Widgets::get_instance();
}
