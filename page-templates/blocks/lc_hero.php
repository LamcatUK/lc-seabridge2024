<?php
$bg = wp_get_attachment_image_url(get_field('background'), 'full');
?>
<section class="hero" style="background-image: url(<?=$bg?>)">
    <div class="hero__inner">
        <h1 class="my-auto d-inline">
            <?php
            if (get_field('pre_title') ?? null) {
                ?>
            <div class="hero__pre">
                <?=get_field('pre_title')?>
            </div>
            <?php
            }
            if (get_field('title') ?? null) {
                ?>
            <div class="hero__title">
                <?=get_field('title')?>
            </div>
            <?php
            }
            if (get_field('post_title') ?? null) {
                ?>
            <div class="hero__post text-end">
                <?=get_field('post_title')?>
            </div>
            <?php
            }
?>
        </h1>
    </div>
</section>