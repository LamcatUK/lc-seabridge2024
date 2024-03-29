<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lc-seabridge2024
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <meta name="view-transition" content="same-origin">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/adrianna-300.woff2 "
        as="font" type="font/woff2" crossorigin="anonymous">
    <!-- <link rel="preload" href="<?=get_stylesheet_directory_uri()?>/fonts/adrianna-400.woff2
    " as="font" type="font/woff2" crossorigin="anonymous"> -->
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/adrianna-700.woff2 "
        as="font" type="font/woff2" crossorigin="anonymous">

    <?php
    if (get_field('ga_property', 'options')) {
        ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
        );
    </script>
    <?php
    }
if (get_field('gtm_property', 'options')) {
    ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <?php
}
if (get_field('google_site_verification', 'options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
}
if (get_field('bing_site_verification', 'options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
}

wp_head();
?>
</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php
do_action('wp_body_open');
?>
    <nav class="navbar navbar-expand-lg">
        <a href="/" class="logo-container" aria-label="Home">
            <img src="<?=get_stylesheet_directory_uri()?>/img/seabridge-logo.svg"
                alt="Seabridge Digital">
        </a>
        <div class="button-container d-lg-none">
            <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse mt-2 mt-lg-0" id="navbar">
            <?php
            wp_nav_menu(
                array(
'theme_location'  => 'primary_nav',
'container_class' => 'w-100',
'menu_class'      => 'nav-list',
'fallback_cb'     => '',
'depth'           => 3,
'walker'          => new Understrap_WP_Bootstrap_Navwalker()
)
            );
?>
        </div>
        </div>
    </nav>