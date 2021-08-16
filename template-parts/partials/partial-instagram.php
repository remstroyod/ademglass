<?php
/*
 * Instagram
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;

?>

<!-- instabox -->
<section class="instabox">
    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                <!-- inner -->
                <div class="instabox__inner">

                    <!-- title -->
                    <a href="<?= get_field( 'contacts-instagram-url', 'options' ) ?>" class="instabox__inner-title" target="_blank">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/css/images/instabox-title-icon.png"
                                alt=""
                                title=""
                                class="img-responsive"
                        >
                        <div>
                            <span><?= get_field( 'contacts-instagram-title', 'options' ) ?></span>
                            <small><?= get_field( 'contacts-instagram-text', 'options' ) ?></small>
                        </div>
                    </a>
                    <!-- end title -->

                    <?php if( have_rows( 'contacts-instagram-list', 'options' ) ): ?>
                    <!-- swiper -->
                    <div class="instabox-swiper">
                        <!-- controls -->
                        <div class="swiper-controls hidden-xs hidden-sm">
                            <!-- prev -->
                            <div class="swiper-button-prev">
                                <img
                                        src="<?= get_template_directory_uri() ?>/assets/css/images/swiper-arrow-left.svg"
                                        alt=""
                                        title=""
                                        class="svg"
                                >
                            </div>
                            <!-- end prev -->
                            <!-- next -->
                            <div class="swiper-button-next">
                                <img
                                        src="<?= get_template_directory_uri() ?>/assets/css/images/swiper-arrow-right.svg"
                                        alt=""
                                        title=""
                                        class="svg"
                                >
                            </div>
                            <!-- end next -->
                        </div>
                        <!-- end controls -->
                        <!-- swiper-container -->
                        <div class="carousel swiper-container">
                            <!-- swiper-wrapper -->
                            <div class="swiper-wrapper">

                                <?php while ( have_rows( 'contacts-instagram-list', 'options' ) ) : the_row(); ?>
                                <!-- slide -->
                                <div class="swiper-slide">
                                    <a
                                            href="<?= wp_get_attachment_image_url(get_sub_field('contacts-instagram-list-image'), 'full') ?>"
                                            data-fancybox="instabox"
                                            class="instabox-swiper-link"
                                    >
                                        <img
                                                src="<?= kama_thumb_src('w=400 &h=480 &attach_id=' . get_sub_field('contacts-instagram-list-image')) ?>"
                                                alt="<?= get_sub_field('contacts-instagram-list-alt') ?>"
                                                title="<?= get_sub_field('contacts-instagram-list-title') ?>"
                                                class="img-responsive"
                                        >
                                    </a>
                                </div>
                                <!-- end slide -->
                                <?php endwhile; ?>

                            </div>
                            <!-- end swiper-wrapper -->
                        </div>
                        <!-- end swiper-container -->
                        <!-- controls -->
                        <div class="visible-xs visible-sm">
                            <!-- pagination -->
                            <div class="swiper-pagination text-center"></div>
                            <!-- end pagination -->
                        </div>
                        <!-- end controls -->
                    </div>
                    <!-- end swiper -->
                    <?php endif; ?>

                </div>
                <!-- end inner -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end instabox -->

