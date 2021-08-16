<?php
/*
 * Dour Cupe: Single
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

                <!-- row -->
                <div class="sidebar__row">

                    <!-- left -->
                    <div class="sidebar__row-left">

                        <!-- Menu -->
                        <div class="sidebar__menu">

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
                                <!-- Title -->
                                <div class="sidebar__menu-title">
                                    <span>Вид вставки</span>
                                </div>
                                <!-- end Title -->
                                <!-- list -->
                                <ul class="sidebar__menu-list form-group form-checkbox" style="margin-bottom: 0">
                                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        <li class="catalog__filter-cell-line">
                                            <input
                                                    id="checkbox_menu_<?= get_the_ID() ?>"
                                                    type="checkbox"
                                                <?= ($page_ID == get_the_ID() ? 'checked="checked"' : '') ?>
                                                    autocomplete="off"
                                            >
                                            <label for="checkbox_menu_<?= get_the_ID() ?>">
                                                <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
                                            </label>
                                        </li>
                                    <?php endwhile; wp_reset_query(); ?>
                                </ul>
                                <!-- end list -->
                            <?php endif; ?>

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
                                <!-- Title -->
                                <div class="sidebar__menu-title">
                                    <span>Куда</span>
                                </div>
                                <!-- end Title -->
                                <!-- list -->
                                <ul class="sidebar__menu-list form-group form-checkbox">
                                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                        <li class="catalog__filter-cell-line">
                                            <input
                                                    id="checkbox_menu_<?= get_the_ID() ?>"
                                                    type="checkbox"
                                                <?= ($page_ID == get_the_ID() ? 'checked="checked"' : '') ?>
                                                    autocomplete="off"
                                            >
                                            <label for="checkbox_menu_<?= get_the_ID() ?>">
                                                <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
                                            </label>
                                        </li>
                                    <?php endwhile; wp_reset_query(); ?>
                                </ul>
                                <!-- end list -->
                            <?php endif; ?>

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

                        <!-- dour -->
                        <div class="dour__cupe">

                            <!-- titlebox -->
                            <div class="dour__cupe-titlebox">

                                <?php if( has_post_thumbnail() ) : ?>
                                <!-- left -->
                                <div class="dour__cupe-titlebox--left">
                                    <img
                                            src="<?= kama_thumb_src('w=600 &h=400') ?>"
                                            alt="<?= get_the_title() ?>"
                                            title="<?= get_the_title() ?>"
                                            class="img-responsive"
                                    >
                                </div>
                                <!-- end left -->
                                <?php endif; ?>

                                <!-- right -->
                                <div class="dour__cupe-titlebox--right">

                                    <!-- center -->
                                    <div>
                                        <h2>
                                            <?= get_field( 'dour-cupe-subtitle', get_the_ID() ) ?>
                                        </h2>
                                        <a href="#dour__cupe-variants" class="btn btn-shadow btn-vertical" data-scroll-box=".dour__cupe-variants">
                                            <span>Рассчитайте двери купе<br> по своим размерам</span>
                                        </a>
                                    </div>
                                    <!-- end center -->

                                </div>
                                <!-- end right -->

                            </div>
                            <!-- end titlebox -->

                            <?php if( have_rows( 'dour-cupe-products', get_the_ID() ) ) : ?>
                            <!-- products -->
                            <div class="dour__cupe-products">

                                <!-- title -->
                                <h2 class="dour__cupe-products--title">
                                    Цены на
                                </h2>
                                <!-- end title -->

                                <!-- list -->
                                <ul class="row dour__cupe-products--list">
                                    <?php while ( have_rows( 'dour-cupe-products', get_the_ID() ) ) : the_row(); ?>
                                    <li>
                                        <!-- card -->
                                        <a
                                                href="<?= wp_get_attachment_image_url(get_sub_field( 'dour-cupe-products-image' ), 'full') ?>"
                                                class="catalog__list-card"
                                                data-fancybox
                                        >
                                            <!-- Image -->
                                            <div class="catalog__list-card-image">
                                                <img
                                                        src="<?= kama_thumb_src('w=300 &h=300 &attach_id='.get_sub_field( 'dour-cupe-products-image' ) ) ?>"
                                                        alt="<?= get_sub_field( 'dour-cupe-products-title' ) ?>"
                                                        title="<?= get_sub_field( 'dour-cupe-products-title' ) ?>"
                                                        class="img-responsive center-block"
                                                >
                                            </div>
                                            <!-- End Image -->
                                            <!-- Title -->
                                            <div class="catalog__list-card-title">
                                                <span><?= get_sub_field( 'dour-cupe-products-title' ) ?></span>
                                            </div>
                                            <!-- End Title -->
                                            <?php if( !empty(get_sub_field('dour-cupe-products-price')) ) : ?>
                                                <!-- price -->
                                                <div class="product__row-price">
                                                    <div>
                                                        <span><?= (number_format(get_sub_field('dour-cupe-products-price'), 0, '.', ' ')) ?></span>
                                                        <p>
                                                            <sup>от</sup>
                                                            <sub>руб</sub>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- end price -->
                                            <?php endif; ?>

                                        </a>
                                        <!-- end card -->
                                    </li>
                                    <?php endwhile; ?>

                                </ul>
                                <!-- end list -->

                            </div>
                            <!-- end products -->
                            <?php endif; ?>


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

                            <!-- sheme -->
                            <div class="dour__cupe-sheme">

                                <!-- list -->
                                <ol>
                                    <li>
                                        <!-- left -->
                                        <div class="dour__cupe-sheme--left">
                                            Размер дверей-купе может быть любой или только стандартный?
                                        </div>
                                        <!-- end left -->
                                        <!-- right -->
                                        <div class="dour__cupe-sheme--right">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/door-sheme-icon-01.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                            <!-- Text -->
                                            <div class="text__style">
                                                <p>Размер дверей может быть любой какой необходим именно Вам</p>
                                            </div>
                                            <!-- End Text -->
                                        </div>
                                        <!-- end right -->
                                    </li>
                                    <li>
                                        <!-- left -->
                                        <div class="dour__cupe-sheme--left">
                                            Есть ли выставочный зал, хочу приехать посмотреть образцы дверей-купе?
                                        </div>
                                        <!-- end left -->
                                        <!-- right -->
                                        <div class="dour__cupe-sheme--right">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/door-sheme-icon-02.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                            <!-- Text -->
                                            <div class="text__style">
                                                <p>Вы можете подъехать к нам с 9:00 до 17:30 с понедельника по пятницу</p>
                                            </div>
                                            <!-- End Text -->
                                            <ul class="dour__cupe-sheme--right---gallery">
                                                <li>
                                                    <a
                                                            href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-sheme-gallery-158x125-01.jpg"
                                                            data-fancybox="sheme"
                                                    >
                                                        <img
                                                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-sheme-gallery-158x125-01.jpg"
                                                                alt=""
                                                                title=""
                                                                class="img-responsive"
                                                        >
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                            href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-sheme-gallery-158x125-02.jpg"
                                                            data-fancybox="sheme"
                                                    >
                                                        <img
                                                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-sheme-gallery-158x125-02.jpg"
                                                                alt=""
                                                                title=""
                                                                class="img-responsive"
                                                        >
                                                    </a>
                                                </li>
                                                <li>
                                                    <a
                                                            href="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-sheme-gallery-158x125-03.jpg"
                                                            data-fancybox="sheme"
                                                    >
                                                        <img
                                                                src="<?= get_template_directory_uri() ?>/assets/userfiles/images/dour-cupe-sheme-gallery-158x125-03.jpg"
                                                                alt=""
                                                                title=""
                                                                class="img-responsive"
                                                        >
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end right -->
                                    </li>
                                    <li>
                                        <!-- left -->
                                        <div class="dour__cupe-sheme--left">
                                            Сколько срок изготовления?
                                        </div>
                                        <!-- end left -->
                                        <!-- right -->
                                        <div class="dour__cupe-sheme--right">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/door-sheme-icon-03.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                            <!-- Text -->
                                            <div class="text__style">
                                                <p>Срок изготовления дверей-купе по Вашим размерам от 3 до 10 рабочих дней, в зависимости от сложности конструкции</p>
                                            </div>
                                            <!-- End Text -->
                                        </div>
                                        <!-- end right -->
                                    </li>
                                    <li>
                                        <!-- left -->
                                        <div class="dour__cupe-sheme--left">
                                            Что входит в стоимость?
                                        </div>
                                        <!-- end left -->
                                        <!-- right -->
                                        <div class="dour__cupe-sheme--right">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/door-sheme-icon-04.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                            <!-- Text -->
                                            <div class="text__style">
                                                <p><strong>В стоимость входит:</strong></p>
                                                <ul>
                                                    <li>сама вставка (стекло, зеркало и пр.)</li>
                                                    <li>профиль-ручка</li>
                                                    <li>направляющие: вертикальные и горизонтальные, ролики</li>
                                                    <li>щетка-шлегель для плавного закрывания</li>
                                                    <li>вся фурнитура для установки дверей</li>
                                                </ul>
                                            </div>
                                            <!-- End Text -->
                                        </div>
                                        <!-- end right -->
                                    </li>
                                    <li>
                                        <!-- left -->
                                        <div class="dour__cupe-sheme--left">
                                            Какой профиль используется?
                                        </div>
                                        <!-- end left -->
                                        <!-- right -->
                                        <div class="dour__cupe-sheme--right">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/door-sheme-icon-05.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                            <!-- Text -->
                                            <div class="text__style">
                                                <p>При изготовлении дверей купе мы используем профиль Aristo - один из лидеров по соотношению цена/качество. Также профиль Total - более приемлемый по цене, и долговечный, срок эксплуатации 15 лет, выдерживает более 50 000 открываний. Кроме этого, мы используем профиль Modus.</p>
                                            </div>
                                            <!-- End Text -->
                                        </div>
                                        <!-- end right -->
                                    </li>
                                    <li>
                                        <!-- left -->
                                        <div class="dour__cupe-sheme--left">
                                            Наша компания производитель?
                                        </div>
                                        <!-- end left -->
                                        <!-- right -->
                                        <div class="dour__cupe-sheme--right">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/door-sheme-icon-06.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                            <!-- Text -->
                                            <div class="text__style">
                                                <p>Да, мы сами изготавливаем двери-купе. Производство находится рядом с офисом, на Иловайской 10А (м. Марьино, м. Братиславская)</p>
                                            </div>
                                            <!-- End Text -->
                                        </div>
                                        <!-- end right -->
                                    </li>
                                    <li>
                                        <!-- left -->
                                        <div class="dour__cupe-sheme--left">
                                            Сколько стоит выезд замерщика?
                                        </div>
                                        <!-- end left -->
                                        <!-- right -->
                                        <div class="dour__cupe-sheme--right">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/door-sheme-icon-07.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                            <!-- Text -->
                                            <div class="text__style">
                                                <p>Выезд замерщика в пределах МКАД - 2 000 руб. при заключении договора входит в стоимость</p>
                                                <p>Выезд замерщика за МКАД - обговаривается индивидуально, в зависимости от транспортной доступности объекта</p>
                                            </div>
                                            <!-- End Text -->
                                        </div>
                                        <!-- end right -->
                                    </li>
                                    <li>
                                        <!-- left -->
                                        <div class="dour__cupe-sheme--left">
                                            Сколько стоит доставка, подъем, установка?
                                        </div>
                                        <!-- end left -->
                                        <!-- right -->
                                        <div class="dour__cupe-sheme--right">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/door-sheme-icon-08.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                            <!-- Text -->
                                            <div class="text__style">
                                                <p>Доставка в пределах МКАД - от 2 000 руб. до 3 000 руб. в зависимости от округа Москвы:</p>
                                                <ul>
                                                    <li>
                                                        Юго-Восточный, Южный 2 000 руб.
                                                    </li>
                                                    <li>
                                                        Юго-Западный, Западный, Северо-Западный, Восточный, Северо-Восточный 2 500 руб.
                                                    </li>
                                                    <li>
                                                        Северный 3 000 руб.
                                                    </li>
                                                </ul>
                                                <p>Доставка за МКАД - + 30 руб./км</p>
                                                <ul>
                                                    <li>
                                                        Подъем на лифте - 500 руб.
                                                    </li>
                                                    <li>
                                                        Ручной подъем - 100 руб./этаж за одно изделие
                                                    </li>
                                                    <li>
                                                        Сборка - 10% от стоимости изделия, но не менее 3 000 руб.
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- End Text -->
                                        </div>
                                        <!-- end right -->
                                    </li>
                                </ol>
                                <!-- end list -->

                            </div>
                            <!-- end sheme -->

                            <!-- conversion -->
                            <div class="dour__cupe-conversion">

                                <!-- inner -->
                                <div class="dour__cupe-conversion--inner">
                                    <h5>Рассчитайте стоимость дверей-купе по Вашим размерам</h5>
                                    <a href="#dour__cupe-variants" class="btn btn-vertical" data-scroll-box=".dour__cupe-variants">
                                        <span>Рассчитать</span>
                                    </a>
                                </div>
                                <!-- end inner -->

                            </div>
                            <!-- end conversion -->

                        </div>
                        <!-- end dour -->

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
