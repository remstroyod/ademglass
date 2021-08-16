<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package adem
 */

get_header();
/*
 * Page Headpanel
 */
the_post();
get_template_part( 'template-parts/partials/partial', 'pagehead' );
?>
    <!-- sidebar -->
    <section class="sidebar">
        <!-- container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                    <!-- row -->
                    <div class="sidebar__row">

                        <!-- left -->
                        <div class="sidebar__row-left">

                            <!-- Menu -->
                            <div class="sidebar__menu">
                                <?= get_template_part( 'template-parts/partials/partial', 'leftmenu-one' ); ?>
                                <?= get_template_part( 'template-parts/partials/partial', 'leftmenu-two' ); ?>
                            </div>
                            <!-- End Menu -->

                            <!-- news last -->
                            <div class="sidebar__row-left-footer">
                                <?= get_template_part( 'template-parts/partials/partial', 'news-last' ) ?>
                            </div>
                            <!-- end news last -->

                        </div>
                        <!-- end left -->


                        <!-- right -->
                        <div class="sidebar__row-right">

                            <?= get_template_part('template-parts/partials/partial', 'titlepage'); ?>

                            <?php
                            $category = get_the_category();

                            $args = array(
                                'posts_per_page'        => -1,
                                'orderby'               => 'publish_date',
                                'order'                 => 'DESC',
                                'post_type'             => 'post',
                                'post_status'           => 'publish',
                                'cat'                   => $category[0]->term_id
                            );
                            ?>

                            <?php if($category[0]->term_id == 81) : ?>
                                <!-- Jobs -->
                                <div class="jobs">
                                    <?php
                                    $query = new WP_Query( $args );
                                    if ( $query->have_posts() ) : ?>
                                        <!-- Jobs List -->
                                        <ul class="jobs__list">
                                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                            <li>
                                                <!-- Card -->
                                                <div class="jobs__list-card">
                                                    <!-- Title -->
                                                    <a href="<?= the_permalink() ?>" class="jobs__list-card--title">
                                                        <?= the_title() ?>
                                                    </a>
                                                    <!-- End Title -->
                                                    <!-- Data -->
                                                    <div class="jobs__list-card--date">
                                                        <?= get_the_date('d M / Y') ?>
                                                    </div>
                                                    <!-- End Data -->
                                                    <!-- Except -->
                                                    <div class="jobs__list-card--except dotdotdot">
                                                        <p><?= get_the_excerpt() ?></p>
                                                    </div>
                                                    <!-- End Except -->
                                                    <!-- Archive Link -->
                                                    <a href="<?= the_permalink() ?>" class="archive__link">
                                                        <span>Подробнее</span>
                                                    </a>
                                                    <!-- End Archive Link -->
                                                </div>
                                                <!-- End Card -->
                                            </li>
                                            <?php endwhile; wp_reset_postdata(); ?>
                                        </ul>
                                        <!-- End Jobs List -->
                                    <?php endif; ?>
                                </div>
                                <!-- End Jobs -->
                            <?php elseif ($category[0]->term_id == 128): ?>
                                <?= get_template_part('template-parts/pages/dourcupe/dourcupe', 'archive'); ?>
                            <?php else: ?>
                                <!-- news -->
                                <div class="news">
                                    <?php


                                    $query = new WP_Query( $args );
                                    if ( $query->have_posts() ) : ?>
                                        <!-- News List -->
                                        <ul class="news__list row">
                                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                <li>
                                                    <a href="<?= the_permalink() ?>" class="news__list-card">
                                                        <!-- image -->
                                                        <div class="news__list-image">
                                                            <img
                                                                    src="<?= kama_thumb_src('w=400 &h=400') ?>"
                                                                    alt="<?= get_the_title() ?>"
                                                                    title="<?= get_the_title() ?>"
                                                                    class="img-responsive"
                                                            >
                                                        </div>
                                                        <!-- end image -->
                                                        <!-- data -->
                                                        <div class="news__list-date">
                                                            <?= get_the_date('d M / Y') ?>
                                                        </div>
                                                        <!-- end data -->
                                                        <!-- title -->
                                                        <div class="news__list-title">
                                                            <span><?= the_title() ?></span>
                                                        </div>
                                                        <!-- end title -->
                                                        <?php if($category[0]->term_id == 80) : ?>
                                                            <?php if(!empty(get_the_excerpt())) : ?>
                                                                <!-- except -->
                                                                <div class="news__list-except dotdotdot">
                                                                    <p><?= get_the_excerpt() ?></p>
                                                                </div>
                                                                <!-- end except -->
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </a>
                                                </li>
                                            <?php endwhile; wp_reset_postdata(); ?>
                                        </ul>
                                        <!-- End News List -->
                                    <?php endif; ?>
                                </div>
                                <!-- end news -->
                            <?php endif; ?>

                        </div>
                        <!-- end right -->

                    </div>
                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end sidebar -->
<?php
get_footer();
