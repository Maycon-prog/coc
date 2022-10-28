<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
</head>
<header>
    <nav class="nav-menu">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main_menu', // identificador do menu
                'depth' => 1 // limita submenus
            )
        )
        ?>
    </nav>
</header>

<body <?php body_class(); ?>>