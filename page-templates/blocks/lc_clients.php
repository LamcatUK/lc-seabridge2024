<?php
$classes = $block['className'] ?? null;
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<section class="clients <?=$classes?>">
    <div class="clients__inner">
        <div class="container-xl">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php
                while (have_rows('client_logos','options')) {
                    the_row();
                    ?>
                    <div class="swiper-slide"><img src="<?=wp_get_attachment_image_url(get_sub_field('logo'),'full')?> " alt="" width="100%"></div>
                    <?php
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
add_action('wp_footer',function(){
    ?>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper('.swiper-container', {
  speed: 6000,
  spaceBetween: 10,
  slidesPerView: 3,
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
//   breakpoints: {
//     768: {
//       slidesPerView: 2,
//       spaceBetween: 40,
//     },
//     992: {
//       slidesPerView: 4,
//       spaceBetween: 50,
//     },
//   }
});
</script>
    <?php
});