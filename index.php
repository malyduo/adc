<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css"/>
    <?php wp_head(); ?>
    <?php global $post; ?>
</head>
<body>


<header class="header">
    <section class="header-info">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-info__content">
                        Free Shipping for all orders above $50
                        <a href="#" class="header-info__btn-close">
                            <svg width="12" height="12" viewBox="0 0 48 48" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11.4193 9.31456C10.8309 8.85702 9.98007 8.89861 9.43934 9.43934C8.85355 10.0251 8.85355 10.9749 9.43934 11.5607L21.8787 24L9.43934 36.4393L9.31456 36.5807C8.85702 37.1691 8.89861 38.0199 9.43934 38.5607C10.0251 39.1464 10.9749 39.1464 11.5607 38.5607L24 26.1213L36.4393 38.5607L36.5807 38.6854C37.1691 39.143 38.0199 39.1014 38.5607 38.5607C39.1464 37.9749 39.1464 37.0251 38.5607 36.4393L26.1213 24L38.5607 11.5607L38.6854 11.4193C39.143 10.8309 39.1014 9.98007 38.5607 9.43934C37.9749 8.85355 37.0251 8.85355 36.4393 9.43934L24 21.8787L11.5607 9.43934L11.4193 9.31456Z"
                                      fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header-main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="logo">
                            <a href="<?= get_home_url() ?>">
                                <img class="menu-logo__image" src="<?= get_field('logo', $post->ID) ?>" alt="logo"/>
                            </a>
                        </div>
                        <div class="nav">
                            <?php
                            $args = [
                                'menu' => 'krove_menu',
                                'container_class' => 'nav__wrapper',
                                'link_class'   => 'menu-item__link',
                                'walker' => new WalkerNavMenu()
                            ];
                            wp_nav_menu($args);
                            ?>
                        </div>
                        <div class="profile">
                            <a class="profile-link" href="<?= get_home_url() ?>">
                                <img class="profile-link__icon" src="<?= get_field('profile_icon', $post->ID) ?>"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<section class="section section-hero">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="section-hero__title">Lorem Ipsum</h1>
                <p class="section-hero__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>