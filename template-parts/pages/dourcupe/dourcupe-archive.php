<?php
/*
 * Dour Cupe: Archive
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;

?>
<!-- dour -->
<div class="dour__cupe">

    <!-- type -->
    <div class="dour__cupe-type">

        <!-- row > 1 -->
        <div class="dour__cupe-type--row">
            <?php
            // args
            $args = array(
                'numberposts'	=> -1,
                'post_type'		=> 'post',
                'meta_key'		=> 'dour-cupe-type',
                'meta_value'	=> 1,
                'posts_per_page' => -1,
            );
            // query
            $the_query = new WP_Query( $args );
            if($the_query->have_posts()) :
                ?>
                <!-- title -->
                <span>Вид вставки:</span>
                <!-- end title -->
                <!-- list -->
                <ul>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li>
                            <a href="<?= the_permalink() ?>">
                                <?= the_title() ?>
                            </a>
                        </li>
                    <?php endwhile; wp_reset_query(); ?>
                </ul>
                <!-- end list -->
            <?php endif; ?>
        </div>
        <!-- end row > 1 -->

        <!-- row > 2 -->
        <div class="dour__cupe-type--row">
            <?php
            // args
            $args = array(
                'numberposts'	=> -1,
                'post_type'		=> 'post',
                'meta_key'		=> 'dour-cupe-type',
                'meta_value'	=> 2,
                'posts_per_page' => -1,
            );
            // query
            $the_query = new WP_Query( $args );
            if($the_query->have_posts()) :
                ?>
                <!-- title -->
                <span>Куда:</span>
                <!-- end title -->
                <!-- list -->
                <ul>
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li>
                            <a href="<?= the_permalink() ?>">
                                <?= the_title() ?>
                            </a>
                        </li>
                    <?php endwhile; wp_reset_query(); ?>
                </ul>
                <!-- end list -->
            <?php endif; ?>
        </div>
        <!-- end row > 2 -->

    </div>
    <!-- end type -->

    <!-- production -->
    <div class="dour__cupe-production">

        <!-- title -->
        <h3 class="dour__cupe-production--title">
            Какие двери-купе мы изготавливаем:
        </h3>
        <!-- end title -->

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-8 col-lg-8">

                <!-- list -->
                <ol class="dour__cupe-production--list">
                    <li>
                        с декоративным стеклом и зеркалом - 330 видов рисунков!
                    </li>
                    <li>
                        с зеркалом (серебро и бронза)
                    </li>
                    <li>
                        с делителями
                    </li>
                    <li>
                        с пескоструйным рисунком
                    </li>
                    <li>
                        с фотопечатью
                    </li>
                    <li>
                        для гардеробной
                    </li>
                    <li>
                        с декоративными мдф панелями
                    </li>
                </ol>
                <!-- end list -->

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-16 col-lg-16">

                <!-- row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-xs-24 col-sm-12 col-md-12 col-lg-12">

                        <ul class="row dour__cupe-production--imagelist">
                            <li>
                                <a
                                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-01.jpg"
                                        data-fancybox="gallery-1"
                                >
                                    <img
                                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-01.jpg"
                                            alt=""
                                            title=""
                                    >
                                </a>
                            </li>
                            <li>
                                <a
                                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-02.jpg"
                                        data-fancybox="gallery-1"
                                >
                                    <img
                                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-02.jpg"
                                            alt=""
                                            title=""
                                    >
                                </a>
                            </li>
                            <li>
                                <a
                                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-03.jpg"
                                        data-fancybox="gallery-1"
                                >
                                    <img
                                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-03.jpg"
                                            alt=""
                                            title=""
                                    >
                                </a>
                            </li>
                            <li>
                                <a
                                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-04.jpg"
                                        data-fancybox="gallery-1"
                                >
                                    <img
                                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-04.jpg"
                                            alt=""
                                            title=""
                                    >
                                </a>
                            </li>
                            <li>
                                <a
                                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-05.jpg"
                                        data-fancybox="gallery-1"
                                >
                                    <img
                                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-05.jpg"
                                            alt=""
                                            title=""
                                    >
                                </a>
                            </li>
                            <li>
                                <a
                                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-06.jpg"
                                        data-fancybox="gallery-1"
                                >
                                    <img
                                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-production-img-400x400-06.jpg"
                                            alt=""
                                            title=""
                                    >
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- end col -->

                    <!-- col -->
                    <div class="col-xs-24 col-sm-12 col-md-12 col-lg-12">

                        <!-- info -->
                        <div class="dour__cupe-production--info">

                            <!-- center -->
                            <div>
                                <img
                                        src="<?= get_template_directory_uri() ?>/assets/css/images/dour-cupe-production-icon.svg"
                                        alt=""
                                        title=""
                                        class="svg center-block"
                                >
                                <span>Срок изготовления<br> дверей-купе по<br> Вашим размерам</span>
                                <div class="dour__cupe-production--info---day">
                                    <sup>от</sup>
                                    <b data-caption="3">3</b>
                                    <sub>дней</sub>
                                </div>
                            </div>
                            <!-- end center -->

                        </div>
                        <!-- end info -->

                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->


            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end production -->

    <!-- materials -->
    <div class="dour__cupe-materials">

        <!-- title -->
        <h3 class="dour__cupe-materials--title">
            При производстве дверей-купе мы используем профиль:
        </h3>
        <!-- end title -->

        <!-- row -->
        <div class="row dour__cupe-materials--rows">

            <!-- col -->
            <div class="col-xs-24 col-sm-12 col-md-8 col-lg-8">

                <!-- group -->
                <div class="dour__cupe-materials--rows---group">
                    <!-- cell -->
                    <div class="dour__cupe-materials--rows---cell">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-img-01.png"
                                alt="Aristo"
                                title="Aristo"
                                class="center-block img-responsive"
                        >
                        <h6>Aristo</h6>
                        <p>Качественный, надежный профиль, один из лидеров на рынке</p>
                    </div>
                    <!-- end cell -->
                    <!-- cell -->
                    <div class="dour__cupe-materials--rows---cell">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-img-02.png"
                                alt="Modus"
                                title="Modus"
                                class="center-block img-responsive"
                        >
                        <h6>Modus</h6>
                        <p>Современная система для дверей купе - ОТСУТСТВИЕ ВИДИМОГО ГОРИЗОНТАЛЬНОГО ПРОФИЛЯ - Хит продаж!</p>
                    </div>
                    <!-- end cell -->
                </div>
                <!-- end group -->

            </div>
            <!-- end col -->

            <!-- col -->
            <div class="col-xs-24 col-sm-12 col-md-16 col-lg-16">

                <!-- cell -->
                <div class="dour__cupe-materials--rows---cell">

                    <!-- text -->
                    <div>
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-img-03.png"
                                alt="Total Absolut"
                                title="Total Absolut"
                                class="center-block img-responsive"
                        >
                        <h6>Total Absolut</h6>
                        <p>43 цветовых решения: классические однотонные, под дерево, под кожу, итальянская коллекция - разработанная дизайнерами, все это дает возможность создавать красивые решения, комбинируя с декоративными мдф панелями с таким же рисунком. При этом, цена этого профиля достаточно приемлемая!</p>
                    </div>
                    <!-- end text -->

                    <!-- gallery -->
                    <div class="dour__cupe-materials--rows---gallery">

                        <!-- Title -->
                        <h5>
                            <span>Примеры дверей в профиле Absolut</span>
                        </h5>
                        <!-- End Title -->

                        <!-- swiper -->
                        <div class="dour__cupe-materials--swiper">
                            <!-- controls -->
                            <div class="swiper-controls">
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

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <a
                                                href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-gallery-img-400x260-01.jpg"
                                                data-src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-gallery-img-400x260-01.jpg"
                                                data-fancybox="gal-1"
                                        >
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-gallery-img-400x260-01.jpg"
                                                    alt=""
                                                    title=""
                                                    class="img-responsive"
                                            >
                                        </a>
                                    </div>
                                    <!-- end slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <a
                                                href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-gallery-img-400x260-02.jpg"
                                                data-src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-gallery-img-400x260-02.jpg"
                                                data-fancybox="gal-1"
                                        >
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-gallery-img-400x260-02.jpg"
                                                    alt=""
                                                    title=""
                                                    class="img-responsive"
                                            >
                                        </a>
                                    </div>
                                    <!-- end slide -->

                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <a
                                                href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-gallery-img-400x260-03.jpg"
                                                data-src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-gallery-img-400x260-03.jpg"
                                                data-fancybox="gal-1"
                                        >
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-materials-gallery-img-400x260-03.jpg"
                                                    alt=""
                                                    title=""
                                                    class="img-responsive"
                                            >
                                        </a>
                                    </div>
                                    <!-- end slide -->

                                </div>
                                <!-- end swiper-wrapper -->
                            </div>
                            <!-- end swiper-container -->
                        </div>
                        <!-- end swiper -->

                    </div>
                    <!-- end gallery -->

                </div>
                <!-- end cell -->

            </div>
            <!-- end col -->

        </div>
        <!-- end row -->

    </div>
    <!-- end materials -->

    <!-- products -->
    <div class="dour__cupe-products">

        <!-- title -->
        <h2 class="dour__cupe-products--title">
            <?= _e( 'Двери купе со вставками из декоративного стекла и зеркала', 'adem' ) ?>
        </h2>
        <!-- end title -->

        <!-- list -->
        <ul class="row dour__cupe-products--list">

            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-01.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-01.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Зеркало серебро + Стекло BWG-HG-029-BG черное</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-02.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-02.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Двери с делителями и Зеркалом Колотый Лед</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-03.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-03.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Двери купе Зеркало Ромашки бронза</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>

            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-04.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-04.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Двери купе Лакобель белый + Зеркало Леди серебро</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-05.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-05.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Зеркало Леди серебро</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-06.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-06.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Зеркало 111 Дождь серебро</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>

            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-07.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-07.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Зеркало серебро + Стекло GM-6096 белое</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-08.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-08.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Лакобель 1236 + SMC DSG 031 листья крупные</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>

        </ul>
        <!-- end list -->

    </div>
    <!-- end products -->

    <!-- products -->
    <div class="dour__cupe-products">

        <!-- title -->
        <h2 class="dour__cupe-products--title">
            Двери купе со стеклом лакобель
        </h2>
        <!-- end title -->

        <!-- list -->
        <ul class="row dour__cupe-products--list">

            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-10.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-10.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Лакобель черный + зеркало с тремя делителями</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>7 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-11.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-11.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Лакобель Цвет 1236</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>7 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-12.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-12.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Лакобель черный + Зеркало Уади</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>7 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>

        </ul>
        <!-- end list -->

    </div>
    <!-- end products -->

    <!-- products -->
    <div class="dour__cupe-products">

        <!-- title -->
        <h2 class="dour__cupe-products--title">
            Двери-купе для гардеробной
        </h2>
        <!-- end title -->

        <!-- list -->
        <ul class="row dour__cupe-products--list">

            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-13.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-13.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Матовое стекло бесцветное</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>6 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-14.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-14.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Матовое зеркало бронза + Колотый лед + Зеркало бронза</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-15.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-15.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Лакобель белый + Зеркало Ромашки бронза</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>8 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>

        </ul>
        <!-- end list -->

    </div>
    <!-- end products -->

    <!-- products -->
    <div class="dour__cupe-products">

        <!-- title -->
        <h2 class="dour__cupe-products--title">
            Двери купе с матовым стеклом и зеркалом
        </h2>
        <!-- end title -->

        <!-- list -->
        <ul class="row dour__cupe-products--list">

            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-16.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-16.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Матовое стекло + 4 делителя Зеркало + Матовое стекло и 2 делителя</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>6 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-17.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-17.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Матовое зеркало с 3 делителями + Зеркало</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>7 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>
            <li>
                <!-- card -->
                <a href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-18.jpg" class="catalog__list-card" data-fancybox>
                    <!-- Image -->
                    <div class="catalog__list-card-image">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-products-img-300x300-18.jpg"
                                alt=""
                                title=""
                                class="img-responsive center-block"
                        >
                    </div>
                    <!-- End Image -->
                    <!-- Title -->
                    <div class="catalog__list-card-title">
                        <span>Матовое стекло с 2 делителями</span>
                    </div>
                    <!-- End Title -->
                    <!-- price -->
                    <div class="product__row-price">
                        <div>
                            <span>6 000</span>
                            <p>
                                <sup>от</sup>
                                <sub>руб</sub>
                            </p>
                        </div>
                    </div>
                    <!-- end price -->
                </a>
                <!-- end card -->
            </li>

        </ul>
        <!-- end list -->

    </div>
    <!-- end products -->

    <!-- text -->
    <div class="dour__cupe-text">

        <!-- text > style -->
        <div class="text__style">
            <?= category_description() ?>
        </div>
        <!-- end text > style -->

    </div>
    <!-- end text -->

    <!-- variants -->
    <div class="dour__cupe-variants">

        <!-- title -->
        <h2 class="dour__cupe-variants--title">
            Выберите варианты разделения двери
        </h2>
        <!-- end title -->

        <!-- list -->
        <ul class="row dour__cupe-variants--list">

            <li>
                <!-- checkbox -->
                <div class="checkbox">
                    <input
                            id="check-inserts-1"
                            type="checkbox"
                            name="inserts[]"
                            value="Комби - 1"
                    >
                    <label for="check-inserts-1">
                        <div class="images">
                            <img
                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-variants-img-01.jpg"
                                    alt="Комби - 1"
                                    title="Комби - 1"
                                    class="img-responsive center-block"
                            >
                        </div>
                        <div class="name">
                            Комби - 1
                        </div>
                    </label>
                </div>
                <!-- end checkbox -->
            </li>
            <li>
                <!-- checkbox -->
                <div class="checkbox">
                    <input
                            id="check-inserts-2"
                            type="checkbox"
                            name="inserts[]"
                            value="Комби - 2"
                    >
                    <label for="check-inserts-2">
                        <div class="images">
                            <img
                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-variants-img-02.jpg"
                                    alt="Комби - 2"
                                    title="Комби - 2"
                                    class="img-responsive center-block"
                            >
                        </div>
                        <div class="name">
                            Комби - 2
                        </div>
                    </label>
                </div>
                <!-- end checkbox -->
            </li>
            <li>
                <!-- checkbox -->
                <div class="checkbox">
                    <input
                            id="check-inserts-3"
                            type="checkbox"
                            name="inserts[]"
                            value="Комби - 3"
                    >
                    <label for="check-inserts-3">
                        <div class="images">
                            <img
                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-variants-img-03.jpg"
                                    alt="Комби - 3"
                                    title="Комби - 3"
                                    class="img-responsive center-block"
                            >
                        </div>
                        <div class="name">
                            Комби - 3
                        </div>
                    </label>
                </div>
                <!-- end checkbox -->
            </li>
            <li>
                <!-- checkbox -->
                <div class="checkbox">
                    <input
                            id="check-inserts-4"
                            type="checkbox"
                            name="inserts[]"
                            value="Комби - 1 / 4"
                    >
                    <label for="check-inserts-4">
                        <div class="images">
                            <img
                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-variants-img-04.jpg"
                                    alt="Комби - 1 / 4"
                                    title="Комби - 1 / 4"
                                    class="img-responsive center-block"
                            >
                        </div>
                        <div class="name">
                            Комби - 1 / 4
                        </div>
                    </label>
                </div>
                <!-- end checkbox -->
            </li>

            <li>
                <!-- checkbox -->
                <div class="checkbox">
                    <input
                            id="check-inserts-5"
                            type="checkbox"
                            name="inserts[]"
                            value="Комби - 3 / 4"
                    >
                    <label for="check-inserts-5">
                        <div class="images">
                            <img
                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-variants-img-05.jpg"
                                    alt="Комби - 3 / 4"
                                    title="Комби - 3 / 4"
                                    class="img-responsive center-block"
                            >
                        </div>
                        <div class="name">
                            Комби - 3 / 4
                        </div>
                    </label>
                </div>
                <!-- end checkbox -->
            </li>
            <li>
                <!-- checkbox -->
                <div class="checkbox">
                    <input
                            id="check-inserts-6"
                            type="checkbox"
                            name="inserts[]"
                            value="Комби - 4 / 4"
                    >
                    <label for="check-inserts-6">
                        <div class="images">
                            <img
                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-variants-img-06.jpg"
                                    alt="Комби - 4 / 4"
                                    title="Комби - 4 / 4"
                                    class="img-responsive center-block"
                            >
                        </div>
                        <div class="name">
                            Комби - 4 / 4
                        </div>
                    </label>
                </div>
                <!-- end checkbox -->
            </li>
            <li>
                <!-- checkbox -->
                <div class="checkbox">
                    <input
                            id="check-inserts-7"
                            type="checkbox"
                            name="inserts[]"
                            value="Комби - 4 / 5"
                    >
                    <label for="check-inserts-7">
                        <div class="images">
                            <img
                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-variants-img-07.jpg"
                                    alt="Комби - 4 / 5"
                                    title="Комби - 4 / 5"
                                    class="img-responsive center-block"
                            >
                        </div>
                        <div class="name">
                            Комби - 4 / 5
                        </div>
                    </label>
                </div>
                <!-- end checkbox -->
            </li>
            <li>
                <!-- checkbox -->
                <div class="checkbox">
                    <input
                            id="check-inserts-8"
                            type="checkbox"
                            name="inserts[]"
                            value="Комби - 4 / 5"
                    >
                    <label for="check-inserts-8">
                        <div class="images">
                            <img
                                    src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-variants-img-08.jpg"
                                    alt="Комби - 4 / 5"
                                    title="Комби - 4 / 5"
                                    class="img-responsive center-block"
                            >
                        </div>
                        <div class="name">
                            Комби - 4 / 5
                        </div>
                    </label>
                </div>
                <!-- end checkbox -->
            </li>

        </ul>
        <!-- end list -->

    </div>
    <!-- end variants -->

    <!-- formone -->
    <div class="dour__cupe-formone">

        <!-- Form -->
        <div class="dour__cupe-formone--form">

            <!-- title -->
            <h3 class="dour__cupe-formone--title">
                Рассчитать по моим размерам
            </h3>
            <!-- end title -->

            <!-- Form -->
            <?= do_shortcode( '[contact-form-7 id="1057" title="Двери купе: Рассчитать по моим размерам" html_class="form"]' ) ?>
            <!-- End Form -->

        </div>
        <!-- End Form -->

        <!-- Woman -->
        <img
                src="<?= get_template_directory_uri() ?>/assets/css/images/door-form-woman.png"
                alt=""
                title=""
                class="dour__cupe-formone--woman"
        >
        <!-- End Woman -->

    </div>
    <!-- end formone -->

    <!-- photos -->
    <div class="dour__cupe-photos">

        <!-- title -->
        <h3 class="dour__cupe-photos--title">
            Фотогалерея наших работ
        </h3>
        <!-- end title -->

        <!-- list -->
        <ul class="row dour__cupe-photos--list">
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-01.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-01.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-02.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-02.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-03.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-03.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-04.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-04.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-05.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-05.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-06.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-06.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-07.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-07.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-08.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-08.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-09.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-09.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-10.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-10.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-11.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-11.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-12.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-12.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-13.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-13.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-14.jpg"
                        data-fancybox="photos"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-photos-img-158x125-14.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                </a>
            </li>
        </ul>
        <!-- end list -->

    </div>
    <!-- end photos -->

    <!-- portfolio -->
    <div class="dour__cupe-portfolio">

        <!-- row -->
        <div class="dour__cupe-portfolio--titlerow">
            <!-- title -->
            <h2 class="dour__cupe-portfolio--title">
                Фотогалерея наших работ
            </h2>
            <!-- end title -->
            <span>В наличии 300 вариантов декоративного зеркала и стекол</span>
        </div>
        <!-- end row -->

        <!-- list -->
        <ul class="row dour__cupe-portfolio--list">
            <li class="video">
                <a
                        href="https://www.youtube.com/watch?v=Q-uOpq_sSAI&feature=youtu.be"
                        data-fancybox="video"
                >
                    <div>
                        <!-- Play -->
                        <div class="btn btn-plays">
                            <i class="fa fa-play"></i>
                        </div>
                        <!-- End Play -->
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-01.jpg"
                                alt=""
                                title=""
                                class="img-responsive"
                        >
                    </div>
                </a>
            </li>

            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-02.jpg"
                        data-fancybox="portfolio"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-02.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                    <span>SMC-181 бронза</span>
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-03.jpg"
                        data-fancybox="portfolio"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-03.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                    <span>SMC-179 б/цвет</span>
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-04.jpg"
                        data-fancybox="portfolio"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-04.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                    <span>Лакобель 1015 светло-бежевый</span>
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-05.jpg"
                        data-fancybox="portfolio"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-05.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                    <span>SMC-149 бронза</span>
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-06.jpg"
                        data-fancybox="portfolio"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-06.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                    <span>Лакобель 1236 светло-коричневый</span>
                </a>
            </li>

            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-07.jpg"
                        data-fancybox="portfolio"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-07.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                    <span>Лакобель 9003 на оптивайт</span>
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-08.jpg"
                        data-fancybox="portfolio"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-08.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                    <span>Лакобель 9005 черный</span>
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-09.jpg"
                        data-fancybox="portfolio"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-09.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                    <span>SMC-DSG-031 б/цвет</span>
                </a>
            </li>
            <li>
                <a
                        href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-10.jpg"
                        data-fancybox="portfolio"
                >
                    <img
                            src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-portfolio-img-200x170-10.jpg"
                            alt=""
                            title=""
                            class="img-responsive"
                    >
                    <span>SMC-116 б/цвет (бронза)</span>
                </a>
            </li>

            <li class="end">
                <div>
                    <div>
                        <p>Позвоните чтобы выбрать стекла для Ваших дверей:</p>
                        <strong>+ 7 (499) 110-62-63</strong>
                    </div>
                </div>
            </li>

        </ul>
        <!-- end list -->

    </div>
    <!-- end portfolio -->

    <!-- formtwo -->
    <div class="dour__cupe-formtwo">

        <!-- Left -->
        <div class="dour__cupe-formtwo--left">
            <!-- title -->
            <h6 class="dour__cupe-formtwo--title">
                Рассчитать по моим размерам
            </h6>
            <!-- end title -->
            <p>Если Вы мебельщик - запросите оптовые цены на двери-купе</p>
        </div>
        <!-- End Left -->


        <!-- Right -->
        <div class="dour__cupe-formtwo--right">

            <!-- Form -->
            <?= do_shortcode( '[contact-form-7 id="1135" title="Двери купе: Рассчитать по моим размерам 2" html_class="form row"]' ) ?>
            <!-- End Form -->

        </div>
        <!-- End Right -->

    </div>
    <!-- end formtwo -->

</div>
<!-- end dour -->
