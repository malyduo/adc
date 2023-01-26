<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
    <?php get_template_part('templates/header/content', 'info'); ?>
    <section class="header__navbar">
        <div class="container">
            <div class="navbar__wrapper">
                <div class="logo">
                    <a href="<?= get_home_url() ?>">
                        <img class="menu-logo__image" src="<?= get_field('logo') ?>" alt="logo"/>
                    </a>
                </div>
                <div class="nav">
                    <?php
                    $args = [
                        'menu' => 'krove_menu',
                        'container_class' => 'nav__wrapper',
                        'link_class' => 'menu__link',
                        'walker' => new WalkerNavMenu()
                    ];
                    wp_nav_menu($args);
                    ?>
                </div>
                <div class="profile">
                    <a class="profile__link" href="<?= get_home_url() ?>">
                        <img class="profile__icon" src="<?= get_field('profile_icon') ?>"/>
                    </a>
                </div>
            </div>
        </div>
    </section>
</header>