<?php
/*
 * News Last
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
?>
<?php
$args = array(
    'posts_per_page'        => 1,
    'orderby'               => 'post_date',
    'order'                 => 'DESC',
    'post_type'             => 'post',
    'post_status'           => 'publish',
    'cat'                   => 79
);

$query = new WP_Query( $args );
if ( $query->have_posts() ) { ?>
    <!-- title -->
    <h5>Новости</h5>
    <!-- end title -->
    <?php while ( $query->have_posts() ) { $query->the_post(); ?>
        <!-- news -->
        <div class="news__list">
            <!-- image -->
            <a href="<?= the_permalink() ?>">
                <img
                    src="<?= kama_thumb_src('w=400 &h=400') ?>"
                    alt="<?= get_the_title() ?>"
                    title="<?= get_the_title() ?>"
                    class="img-responsive"
                >
            </a>
            <!-- end image -->
            <!-- data -->
            <div class="news__list-date">
                <?= the_date('d M / Y') ?>
            </div>
            <!-- end data -->
            <!-- title -->
            <div class="news__list-title">
                <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
            </div>
            <!-- end title -->
        </div>
        <!-- end news -->
    <?php }; wp_reset_postdata(); ?>
    <!-- all -->
    <a href="<?= get_category_link(79) ?>" class="archive__link">
        <span>Все новости</span>
    </a>
    <!-- end all -->
<?php } ?>




