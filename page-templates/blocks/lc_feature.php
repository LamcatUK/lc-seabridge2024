<?php
$txtcol = get_field('order') == 'text' ? 'order-2 order-md-1' : 'order-2 order-md-2';
$imgcol = get_field('order') == 'text' ? 'order-1 order-md-2' : 'order-1 order-md-1';

$txtanim = get_field('order') == 'text' ? 'fade-right' : 'fade-left';
$imganim = get_field('order') == 'text' ? 'fade-left' : 'fade-right';

// $txtanim = '';
// $imganim = '';

?>
<section class="feature py-5">
    <div class="container-xl">
        <?php
        if (get_field('title') ?? null) {
            ?>
        <div class="h2 d-md-none">
            <?=get_field('title')?>
        </div>
        <?php
        }
?>
        <div class="row g-4">
            <div class="col-md-6 <?=$txtcol?>"
                data-aos="<?=$txtanim?>">
                <?php
        if (get_field('title') ?? null) {
            ?>
                <h2 class="d-none d-md-block">
                    <?=get_field('title')?>
                </h2>
                <?php
        }
?>
                <div><?=get_field('content')?>
                </div>
                <?php
if (get_field('link') ?? null) {
    $l = get_field('link');
    ?>
                <a href="<?=$l['url']?>"
                    target="<?=$l['target']?>"
                    class="mt-4 button"><?=$l['title']?></a>
                <?php
}
?>
            </div>
            <div class="col-md-6 <?=$imgcol?>"
                data-aos="<?=$imganim?>">
                <img src="<?=wp_get_attachment_image_url(get_field('image'), 'large')?>"
                    alt="<?=get_field('title')?>"
                    class="feature__img">
            </div>
        </div>
    </div>
</section>