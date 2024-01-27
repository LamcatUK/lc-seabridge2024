<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$img = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<main id="main" class="work">
    <?php
    $content = get_the_content();
$blocks = parse_blocks($content);
$sidebar = array();
$after;
?>
    <div class="work__container">
        <div class="container-xl">
            <div class="row g-2">
                <div class="col-lg-9 order-1">
                    <img src="<?=$img?>" alt="" class="work__image">
                    <div class="work__content bg-white text-dark p-4 mb-2">
                        <h1 class="work__title"><?=get_the_title()?>
                        </h1>
                        <h2 class="work__subtitle">
                            <?=get_field('subtitle')?>
                        </h2>
                        <div class="work__meta mb-4">
                            <?php

$types = wp_get_post_terms(get_the_ID(), 'work-type');
$typesList = wp_list_pluck($types, 'name');
$typesNames = implode(', ', $typesList);


if ($typesNames) {
    ?>
                            <span
                                class="work__category"><?=$typesNames?></span>
                            <?php
}
?>
                        </div>
                        <?php
// $count = estimate_reading_time_in_minutes(get_the_content(), 200, true, true);
// echo $count;

foreach ($blocks as $block) {
    if ($block['blockName'] == 'core/heading') {
        if (!array_key_exists('level', $block['attrs'])) {
            $heading = strip_tags($block['innerHTML']);
            $id = acf_slugify($heading);
            echo '<a id="' . $id . '" class="anchor"></a>';
            $sidebar[$heading] = $id;
        }
    }
    echo render_block($block);
}

if (get_field('site_url')) {
    ?>
                        <a href="<?=get_field('site_url')?>"
                            target="_blank" class="work__link">Visit
                            <?=get_the_title()?> <i
                                class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        <?php
}
?>

                        <div class="work__nav">
                            <?=lc_work_nav()?>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 order-2">
                    <div class="sidebar pb-2">
                        <?php
                        foreach (get_field('gallery') as $a) {
                            ?>
                        <a href="<?=wp_get_attachment_image_url($a, 'full')?>"
                            class="glightbox" data-gallery="gallery1">
                            <img src="<?=wp_get_attachment_image_url($a, 'large')?>"
                                alt="image" />
                        </a>
                        <?php
                        }
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
add_action('wp_footer', function () {
    ?>
    <link rel="stylesheet"
        href="<?=get_stylesheet_directory_uri()?>/css/glightbox.css" />
    <script src="<?=get_stylesheet_directory_uri()?>/js/glightbox.min.js">
    </script>
    <script type="text/javascript">
        const lightbox = GLightbox();
    </script>
    <?php
}, 9999);

get_footer();
?>
</main>