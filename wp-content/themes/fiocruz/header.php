<!DOCTYPE html>
<html <?php language_attributes(); ?> id="pagina">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head() ?>
</head>

<body id="body" <?php body_class(); ?>>
    <div id="pade" class="site">
        <header>
            <div id="menu-desktop" class="container">
                <div class="options-header">
                    <div class="div-options d-flex">
                        <i class="icon bi-arrow-down-circle-fill"></i>
                        <a href="#conteudo" accesskey="1"><strong>Pular para conteúdo [1]</strong></a>
                    </div>
                    <div class="div-options">
                        <strong>Texto</strong>
                        <a id="sub" href="#" class="sub-font" aria-label="Diminuir fonte, pressione" accesskey="-">A</a>
                        <a id="normal" href="#" class="normal-font" aria-label="Voltar fonte ao padrão, pressione" accesskey="0">A</a>
                        <a id="soma" href="#" class="soma-font" aria-label="Aumentar fonte, pressione" accesskey="+">A</a>
                    </div>
                    <div class="div-options d-flex">
                        <i class="icon bi bi-circle-half"></i>
                        <a id="contraste" href="#" class="contraste" accesskey="2"><strong>Alto Contraste [2]</strong></a>
                    </div>
                </div>
                <div class="menu-header">
                    <div class="logo-menu">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        } else {
                        ?>
                            <a href="<?php echo home_url('/') ?>"><span><?php bloginfo('name') ?></span></a>
                        <?php
                        }
                        ?>
                    </div>
                    <button id="open" class="check-button">
                        <div class="menu-icon">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </button>
                    <h1 class="legenda-header">Programa de Pós-Graduação em Divulgação da Ciência, Tecnologia e Saúde</h1>
                </div>
            </div>
            <nav class="nav-menu">
                <div class="container">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main_menu', // identificador do menu
                            'depth' => 1 // limita submenus
                        )
                    )
                    ?>
                </div>
            </nav>



            <div id="menu-mobile">
                <button id="close" class="close-button"><i class="bi bi-x-circle"></i></button>
                <h2 class="legenda-mobile">Programa de Pós-Graduação em Divulgação da Ciência, Tecnologia e Saúde</h2>
                <div class="menu-header-mobile">
                    <nav class="nav-menu-mobile">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main_menu', // identificador do menu
                                'depth' => 1 // limita submenus
                            )
                        )
                        ?>
                    </nav>
                </div>

                <div class="options-header-mobile">
                    <div class="div-options-mobile">
                        <strong>Texto</strong>
                        <a id="subMobile" href="#" class="sub-font">A</a>
                        <a id="normalMobile" href="#" class="normal-font">A</a>
                        <a id="somaMobile" href="#" class="soma-font">A</a>
                    </div>
                    <div class="div-options-mobile d-flex">
                        <i class="icon bi bi-circle-half"></i>
                        <a id="contrasteMobile" class="contraste"><strong>Alto Contraste</strong></a>
                    </div>
                </div>
            </div>
        </header>
        <noscript>Essa página precisa de javascript para funcionar!</noscript>