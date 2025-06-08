<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="main-container header-main">
        <div class="logo">
            <a href="/">
                <img src="<?= get_theme_file_uri('assets/images/Logo.svg') ?>" alt="">
            </a>
        </div>

        <div class="burger" id="burger">
            <img src="<?= get_theme_file_uri('assets/images/burger.svg') ?>" alt="">
        </div>

        <nav class="main-menu">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary_menu',
                'menu_class' => 'menu-items',
                'container' => false
            ]);
            ?>
        </nav>
    </div>

    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <div class="logo">
                <a href="/">
                    <img src="<?= get_theme_file_uri('assets/images/Logo.svg') ?>" alt="">
                </a>
            </div>
            <div class="close" id="closeMenu">×</div>
        </div>

        <nav class="mobile-nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary_menu',
                'menu_class' => 'mobile-menu-items',
                'container' => false
            ]);
            ?>
        </nav>

        <a href="#contact" class="contact-us-button contact-mobile">
            CONTACT US
            <img src="<?= get_theme_file_uri('assets/images/contact.svg') ?>" alt="">
        </a>
    </div>
</header>
