<?php

function theme_add_scripts()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css'); 
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/js/scripts.js');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('vuejs', 'https://unpkg.com/vue@3/dist/vue.global.js');
    wp_enqueue_script('splider-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js');
    wp_enqueue_style('splider-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css');
}

add_action('wp_enqueue_scripts', 'theme_add_scripts');

function theme_add_config()
{
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu'
            // 'identificador' => 'nome'
        )
    );

    add_theme_support('custom-logo', array(
        'width' => 238,
        'height' => 80,
        'flex-height' => false,
        'flex-width' => true
    ));

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_add_config', 0);

function mytheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here

    $wp_customize->add_section( 'my_site_logo' , array(
        'title'      => __( 'My Site Logo', 'mytheme' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(
               'label'      => __( 'Upload a logo', 'theme_name' ),
               'section'    => 'my_site_logo',
               'settings'   => 'my_site_logo_id' 
            )
        )
    );

}
add_action( 'customize_register', 'mytheme_customize_register' );


function add_elementor_widget_categories($elements_manager)
{

    $elements_manager->add_category(
        'widgets-personalizados',
        [
            'title' => esc_html__('Widgets Personalizados', 'elementor'),
            'icon' => 'eicon-global-colors',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');

require_once("custom-widgets/my-widgets.php");
