<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="format-detection"
          content="telephone=no" />
    <!-- <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/style.css" /> -->
    <?php wp_head(); ?>
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    <!-- <meta name="robots" content="noindex, nofollow"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <header class="header">
            <div class="grid-container">
                <div class="grid header__content">
                    <div class="grid__item grid__item--ds-4 grid__item--mb-12">
                        <div class="header__logo logo">
                            <a href="#"
                               class="logo__wrap">
                                <?php
                               if(function_exists('the_custom_logo')){
                                   $custom_logo_id = get_theme_mod('custom_logo');
                                   if ($custom_logo_id) {
                                       $logo = wp_get_attachment_image_src($custom_logo_id);
                                    } else {
                                        $homeurl = home_url('/wp-content/themes/sketchify/assets/img/logo.svg');
                                        $logo =  array($homeurl);
                                   }
                                   }
                               ?>
                                <img src="<?php echo $logo[0] ?>"
                                     alt="Sketchify.AI" />
                            </a>
                        </div>
                    </div>
                    <div class="grid__item grid__item--ds-4 grid__item-header-menu grid__item--mb-">
                        <div class="header__menu menu">
                            <nav class="menu__body">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'menu' => 'primary',
                                        'container' => '',
                                        'theme_location' => 'primary',
                                        'items_wrap' => '<ul id="menu-primary-menu" class="menu__list">%3$s</ul>'
                                    )
                                )
                            ?>
                            </nav>
                        </div>
                    </div>
                    <div class="grid__item grid__item--ds-4 grid__item-header-button grid__item--mb-">
                        <div class="header__button">
                            <a href="#"
                               class="btn">Сreate a page</a>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button"
                    class="menu__icon icon-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </header>