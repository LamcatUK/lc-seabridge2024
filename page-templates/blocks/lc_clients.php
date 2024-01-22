<?php
$classes = $block['className'] ?? null;
?>
<style>

</style>
<section class="clients <?=$classes?>">
    <div class="clients__inner">
        <div class="clients__slider">
            <?php
            while (have_rows('client_logos', 'options')) {
                the_row();
                ?>
            <div class="clients__slide"><img
                    src="<?=wp_get_attachment_image_url(get_sub_field('logo'), 'full')?> "
                    alt="" width="100%"></div>
            <?php
            }
?>
        </div>
    </div>
</section>

<?php
add_action('wp_footer', function () {
    ?>
<script>
    (function($) {
        $(document).ready(function() {
            $('.clients__slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    }(jQuery))
</script>
<?php
}, 9999);
