<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lc-seabridge2024
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<footer class="footer pt-4">
    <div class="container-xl">
        <div class="row pb-2 pb-lg-4 mx-0">
            <div class="col-md-6 col-lg-3 mb-2 text-center text-md-start">
                <img src="<?=get_stylesheet_directory_uri()?>/img/seabridge-logo.svg"
                    alt="">
            </div>
            <div class="col-md-6 col-lg-3 mb-2">
                <?php
                /*
                <!--
                <div class="pretitle">Contact Us</div>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span>
                        <?=do_shortcode('[contact_email]')?>
                </li>
                </ul>
                <div class="pretitle">Connect</div>
                <div class="social-icons">
                    <?=do_shortcode('[social_icons]')?>
                </div>
                -->
                */
?>
            </div>
            <div class="col-6 col-lg-3 text-center text-md-start">
                <?php wp_nav_menu(array('theme_location' => 'footer_menu1')); ?>
            </div>
            <div class="col-6 col-lg-3 text-center text-md-start">
                <?php wp_nav_menu(array('theme_location' => 'footer_menu2')); ?>
            </div>
        </div>
    </div>
    <div class="colophon px-4">
        <div class="container-xl">
            <div class="d-md-flex justify-content-between">
                <div>&copy; <?=date('Y')?>
                    Seabridge
                    Digital.</div>
                <div>
                    <a href="/privacy-policy/">Privacy</a> &amp; <a href="/cookie-policy/">Cookie Policy</a>
                    |
                    <span>Site by <a href="https://www.lamcat.co.uk/">Lamcat</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>