<?php
/*
 * Solutions: Single
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
$page_ID =  get_the_ID();
?>

<!-- sidebar -->
<section class="sidebar">
    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                <!-- Head Page -->
                <div class="sidebar__headpage">

                    <!-- title -->
                    <h1 class="h3 sidebar__headpage-title">
                        <?= the_title() ?>
                    </h1>
                    <!-- end title -->

                </div>
                <!-- End Head Page -->

                <!-- solutions -->
                <div class="solutions">

                    <!-- intro -->
                    <div class="solutions__intro">

                        <!-- left -->
                        <div class="solutions__intro-left">
                            <?= kama_thumb_img( 'w=580 &h=540 &crop=top' ) ?>
                        </div>
                        <!-- end left -->

                        <!-- right -->
                        <div class="solutions__intro-right">

                            <!-- text -->
                            <div class="solutions__intro-text">
                                <?= the_content() ?>
                            </div>
                            <!-- end text -->

                            <?php
                            $gallery = get_field( 'gallery', get_the_ID() );
                            ?>

                            <?php if( $gallery ) : ?>
                            <!-- slider -->
                            <div class="solutions__intro-slider">

                                <div class="swiper-container">

                                    <!-- wrapper -->
                                    <div class="swiper-wrapper">

                                        <?php foreach ( $gallery as $item ) : ?>
                                        <!-- Slide -->
                                        <div class="swiper-slide">
                                            <a href="<?= $item['url'] ?>" data-src="<?= $item['url'] ?>" data-fancybox="solutions">

                                                <?= kama_thumb_img( 'w=400 &h=400 &crop=top &attach_id=' . $item['id'] ) ?>

                                            </a>
                                        </div>
                                        <!-- End Slide -->
                                        <?php endforeach; ?>

                                    </div>
                                    <!-- end wrapper -->

                                </div>

                                <!-- controls -->
                                <div class="swiper-controls">

                                    <div class="swiper-button swiper-button-prev swiper-button-opacity">
                                        <i class="fa fa-angle-left"></i>
                                    </div>

                                    <div class="swiper-pagination"></div>

                                    <div class="swiper-button swiper-button-next swiper-button-opacity">
                                        <i class="fa fa-angle-right"></i>
                                    </div>

                                </div>
                                <!-- end controls -->

                            </div>
                            <!-- end slider -->
                            <?php endif; ?>

                        </div>
                        <!-- end right -->

                    </div>
                    <!-- end intro -->

                    <!-- form -->
                    <div class="solutions__form">

                        <!-- title -->
                        <h3 class="solutions__form-title">
                            <?= __( 'Пришлите нам проект для расчета', 'adem' ) ?>
                        </h3>
                        <!-- end title -->

                        <!-- excerpt -->
                        <div class="solutions__form-excerpt">
                            <p><?= __( 'Опишите изделие и прикрепите нужные файлы. Мы рассчитаем стоимость и свяжемся с вами', 'adem' ) ?></p>
                        </div>
                        <!-- end excerpt -->

                        <!-- form > row -->
                        <?= do_shortcode( '[contact-form-7 id="1637" title="Решения под проекты" html_class="form row solutions__form-form"]' ) ?>
                        <!-- end form > row -->

                        <!-- woman -->
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/css/images/solutions-form-woman.png"
                                alt=""
                                title=""
                                class="solutions__form-woman"
                        >
                        <!-- end woman -->

                    </div>
                    <!-- end form -->

                    <?php
                    $variants = get_field( 'variants', get_the_ID() );
                    ?>

                    <?php if( $variants['list'] ) : ?>
                    <!-- variants -->
                    <div class="solutions__variants">

                        <!-- title -->
                        <h4 class="solutions__variants-title">
                            <?= $variants['title'] ?>
                        </h4>
                        <!-- end title -->

                        <!-- list -->
                        <ul class="row solutions__variants-list">

                            <?php foreach ( $variants['list'] as $item ) : ?>
                            <li>

                                <!-- item -->
                                <a href="<?= $item['link']['url'] ?>" class="solutions__variants-list-item">

                                    <!-- image -->
                                    <div class="solutions__variants-list-item-image">

                                        <?= kama_thumb_img( 'w=300 &h=300 &crop=top &attach_id=' . $item['image'] ) ?>

                                    </div>
                                    <!-- end image -->

                                    <!-- text -->
                                    <div class="solutions__variants-list-item-text">
                                        <p><?= $item['title'] ?></p>
                                        <span><?= __( 'Смотреть варианты', 'adem' ) ?> <i class="fa fa-angle-right"></i></span>
                                    </div>
                                    <!-- end text -->

                                </a>
                                <!-- end item -->

                            </li>
                            <?php endforeach; ?>

                        </ul>
                        <!-- end list -->

                    </div>
                    <!-- end variants -->
                    <?php endif; ?>

                </div>
                <!-- end solutions -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end sidebar -->
