<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
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