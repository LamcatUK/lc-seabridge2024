<section class="works">
    <div class="container-xl pb-5">
        <div class="works__grid">
            <?php
$q = new WP_Query(array(
    'post_type' => 'work',
    'post_per_page' => -1
));

            while ($q->have_posts()) {
                $q->the_post();
                $sectors = wp_get_post_terms(get_the_ID(), 'sector');
                               
                $sectorsSlugs = wp_list_pluck($sectors, 'slug');
                $sectorsClass = implode(' ', $sectorsSlugs);

                $types = wp_get_post_terms(get_the_ID(), 'work-type');
                $typesList = wp_list_pluck($types, 'slug');
                $typesClass = implode(' ', $typesList);

                $typesNames = wp_list_pluck($types, 'name');
                $typesString = implode(', ', $typesNames);

                ?>
            <a class="works__card <?=$typesClass?> <?=$sectorsClass?>"
                href="<?=get_the_permalink()?>">
                <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'large')?>"
                    class="works__image" alt="">
                <div class="works__overlay">
                    <div class="works__title">
                        <?=get_the_title()?>
                    </div>
                    <div class="works__type">
                        <?=$typesString?>
                    </div>
                </div>
            </a>
            <?php
            }
            ?>
        </div>
    </div>
</section>