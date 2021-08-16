<?php
/*
 * Home: Intro
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;

?>

<?php if( have_rows( 'home-slider-list', get_the_ID() ) ): ?>
<!-- intro -->
<section class="intro">
    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                <!-- slider -->
                <div class="intro-swiper">
                    <!-- image -->
                    <div
                            class="intro-swiper-image"
                            style=""
                    ></div>
                    <!-- end image -->
                    <!-- swiper -->
                    <div class="intro-swiper-left">

                        <!-- inner -->
                        <div class="intro-swiper-left-inner">

                            <?php if(!empty(get_field( 'home-slider-title', get_the_ID() ))) : ?>
                            <!-- subtitle -->
                            <small><?= get_field( 'home-slider-title', get_the_ID() ) ?></small>
                            <!-- end subtitle -->
                            <?php endif; ?>

                            <!-- carousel -->
                            <div class="carousel swiper-container">
                                <!-- wrapper -->
                                <div class="swiper-wrapper">

                                    <?php $i=1; while ( have_rows( 'home-slider-list', get_the_ID() ) ) : the_row(); ?>
                                    <!-- slide -->
                                    <div
                                            class="swiper-slide"
                                            data-slide-image="<?= kama_thumb_src('w=920 &h=640 &attach_id=' . get_sub_field( 'home-slider-list-image' )) ?>"
                                            data-slide-number="0<?= $i ?>"
                                    >

                                        <!-- text -->
                                        <div class="intro-swiper-text">
                                            <?php if( !empty( get_sub_field( 'home-slider-list-title' ) ) ) : ?>
                                            <h1>
                                                <?= get_sub_field( 'home-slider-list-title' ) ?>
                                            </h1>
                                            <?php endif; ?>
                                            <?php if( !empty( get_sub_field( 'home-slider-list-text' ) ) ) : ?>

                                                <?= get_sub_field( 'home-slider-list-text' ) ?>

                                            <?php endif; ?>
                                            <?php if( !empty( get_sub_field( 'home-slider-list-link' ) ) ) : ?>
                                                <?= get_sub_field( 'home-slider-list-link' ) ?>
                                            <?php endif; ?>
                                        </div>
                                        <!-- end text -->
                                        <!-- img -->
                                        <img
                                                src="<?= kama_thumb_src('w=920 &h=640 &attach_id=' . get_sub_field( 'home-slider-list-image' )) ?>"
                                                alt=""
                                                title=""
                                                class="img-responsive visible-xs visible-sm"
                                        >
                                        <!-- end img -->
                                    </div>
                                    <!-- end slide -->
                                    <?php $i++; endwhile; ?>

                                </div>
                                <!-- end wrapper -->
                            </div>
                            <!-- end carousel -->

                            <!-- pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- end pagination -->

                        </div>
                        <!-- end inner -->

                        <!-- current number slide -->
                        <i class="intro-swiper-current hidden-xs hidden-sm"></i>
                        <!-- end current number slide -->

                    </div>
                    <!-- end swiper -->

                    <!-- controls -->
                    <div class="swiper-controls hidden-xs hidden-sm">
                        <!-- btn > prev -->
                        <div class="swiper-button-prev swiper-button-opacity">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <!-- end btn > prev -->
                        <!-- number -->
                        <div class="intro-swiper-number"></div>
                        <!-- end number -->
                        <!-- btn > next -->
                        <div class="swiper-button-next swiper-button-opacity">
                            <i class="fa fa-angle-right"></i>
                        </div>
                        <!-- end btn > next -->
                    </div>
                    <!-- end controls -->

                </div>
                <!-- end slider -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end intro -->
<?php endif; ?>
