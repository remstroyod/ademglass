<?php
/*
Template Name: Калькулятор стекла и зеркал
Template Post Type: page
*/

get_header();
?>

    <!-- intro -->
    <section class="calc__intro intro">
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
                                style="background-image: url('<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>')"
                        ></div>
                        <!-- end image -->
                        <!-- swiper -->
                        <div class="intro-swiper-left">

                            <!-- inner -->
                            <div class="intro-swiper-left-inner">

                                <!-- carousel -->
                                <div class="carousel swiper-container">
                                    <!-- wrapper -->
                                    <div class="swiper-wrapper">


                                            <!-- slide -->
                                            <div
                                                    class="swiper-slide"
                                                    data-slide-image="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
                                                    data-slide-number="01"
                                            >

                                                <!-- text -->
                                                <div class="intro-swiper-text">

                                                    <a href="<?= home_url() ?>" class="calc__intro-back">
                                                        <?= __( 'Главная', 'adem' ) ?>
                                                    </a>

                                                        <h1>
                                                            <?= the_title() ?>
                                                        </h1>

                                                        <?= the_content() ?>

                                                </div>
                                                <!-- end text -->
                                                <!-- img -->
                                                <img
                                                        src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>"
                                                        alt="<?= get_the_title() ?>"
                                                        title="<?= get_the_title() ?>"
                                                        class="img-responsive visible-xs visible-sm"
                                                >
                                                <!-- end img -->
                                            </div>
                                            <!-- end slide -->

                                    </div>
                                    <!-- end wrapper -->
                                </div>
                                <!-- end carousel -->

                            </div>
                            <!-- end inner -->

                        </div>
                        <!-- end swiper -->

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

    <!-- Step -->
    <section class="calc__step">

        <input type="hidden" value="0" id="calc_size_izdelie_price" name="izdelie_price" data-price="0">
        <input
                class=""
                type="hidden"
                name="izdelie"
                value=""
                required=""
                placeholder="Изделие"
                data-price="0"
                id="calc_size_izdelie"
        >

        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row">

                <!-- col -->
                <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                    <!-- Section -->
                    <div class="calc__step-section">

                        <!-- Title -->
                        <h5 class="calc__step-title">
                            <span>01</span> <?= __( 'Выберите категорию товара, а в ней нужное Вам стекло или зеркало.', 'adem' ) ?>
                        </h5>
                        <!-- End Title -->

                        <!-- Excerpt -->
                        <div class="calc__step-excerpt">
                            <?= __( 'В калькуляторе представлены самые ходовые позиции стекла. Если вы не нашли нужное стекло, запросите расчет у менеджера', 'adem' ) ?>
                        </div>
                        <!-- End Excerpt -->

                        <!-- Tabs -->
                        <div class="calc__step-tabs">

                            <?php
                            $tabs = [
                                '0'         => __('Зеркало', 'woocommerce'),
                                '1'         => __('Стекло', 'woocommerce'),
                                '2'         => __('Рифленое стекло', 'woocommerce'),
                                '3'         => __('Лакобель', 'woocommerce'),
                                '4'         => __('Тонированное стекло', 'woocommerce'),
                            ];

                            $tabs_content = [];

                            $args = array(
                                'post_type'         => 'product',
                                'posts_per_page'    => -1,
                                'meta_query'        => [
                                    [
                                        'key'       => 'is_calc',
                                        'value'     => 'Yes',
                                    ],
                                ],
                            );
                            $query_products = new WP_Query( $args );
                            if ( $query_products->have_posts() ) {
                                while ( $query_products->have_posts() ) : $query_products->the_post();

                                    $tb = get_post_meta( get_the_ID(), '_calc_category', true );
                                    $tabs_content[$tb][] = get_the_ID();

                                endwhile;
                            }; wp_reset_postdata();



                            ?>

                            <!-- List -->
                            <ul class="tabproduct" role="tablist">

                                <?php $i=0; foreach ( $tabs as $key => $tab ) : ?>
                                <li role="presentation" class="<?= ($i == 0) ? 'active' : '' ?>">
                                    <a
                                            href="#tab-calc-<?= $key ?>"
                                            aria-controls="tab-calc-<?= $key ?>"
                                            role="tab"
                                            data-toggle="tab"
                                            aria-expanded="true"
                                    >
                                        <span><?= $tab ?></span>
                                    </a>
                                </li>
                                <?php $i++; endforeach; ?>

                            </ul>
                            <!-- End List -->

                            <!-- Content -->
                            <div class="tab-content calc__step-tabs-content">

                                <?php $i=0; foreach ( $tabs as $key => $tab ) : ?>
                                <div role="tabpanel" class="tab-pane fade <?= ($i == 0) ? 'active in' : '' ?>" id="tab-calc-<?= $key ?>">

                                    <?php if( $tabs_content[$key] ) : ?>

                                        <!-- Products -->
                                        <ul class="calc__step-products row">

                                            <?php foreach ( $tabs_content[$key] as $item ) : $_product = wc_get_product($item); ?>
                                            <li>
                                                <a
                                                        href="<?= get_permalink( $_product->get_id() ); ?>"
                                                        class="catalog__list-card calcProduct"
                                                        data-price="<?= get_post_meta( $_product->get_id(), '_calc_price', true ) ?>"
                                                        data-diametr-1="<?= get_post_meta( $_product->get_id(), '_calc_price_5_12', true ) ?>"
                                                        data-diametr-2="<?= get_post_meta( $_product->get_id(), '_calc_price_13_30', true ) ?>"
                                                        data-diametr-3="<?= get_post_meta( $_product->get_id(), '_calc_price_31_100', true ) ?>"
                                                >

                                                    <!-- Image -->
                                                    <div class="catalog__list-card-image">

                                                        <?= kama_thumb_img( 'w=400 &h=400 &class=img-responsive &crop=top &attach_id=' . $_product->get_image_id() ) ?>

                                                    </div>
                                                    <!-- End Image -->

                                                    <!-- Title -->
                                                    <div class="catalog__list-card-title dotdotdot">

                                                        <span><?= $_product->get_name() ?></span>

                                                    </div>
                                                    <!-- End Title -->

                                                </a>
                                            </li>
                                            <?php endforeach; ?>

                                        </ul>
                                        <!-- End Products -->

                                    <?php endif; ?>

                                </div>
                                <?php $i++; endforeach; ?>

                            </div>
                            <!-- End Content -->

                        </div>
                        <!-- End Tabs -->

                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div class="calc__step-section" id="section_calc_1">

                        <!-- Title -->
                        <h5 class="calc__step-title">
                            <span>02</span> <?= __( 'Укажите размер изделия', 'adem' ) ?>
                        </h5>
                        <!-- End Title -->

                        <!-- Group Input -->
                        <div class="calc__step-form-group_input">

                            <!-- left -->
                            <div class="calc__step-form-group_input-left">

                                <input
                                        type="text"
                                        name="size_start"
                                        value=""
                                        placeholder="Высота, мм"
                                        id="calc_size_start"
                                        maxlength="10"
                                        class="calc__step-form-control"
                                >

                                <div class="plch">мм.</div>

                            </div>
                            <!-- end left -->

                            <div class="separator">x</div>

                            <!-- right -->
                            <div class="calc__step-form-group_input-right">

                                <input
                                        type="text"
                                        name="size_end"
                                        value=""
                                        placeholder="Ширина, мм"
                                        id="calc_size_end"
                                        maxlength="10"
                                        class="calc__step-form-control"
                                >

                                <div class="plch">мм.</div>

                            </div>
                            <!-- end right -->

                        </div>
                        <!-- End Group Input -->

                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div class="calc__step-section">

                        <!-- Title -->
                        <h5 class="calc__step-title">
                            <span>03</span> <?= __( 'Количество изделий', 'adem' ) ?>
                        </h5>
                        <!-- End Title -->

                        <!-- Group Input -->
                        <div class="calc__step-form-group">

                            <input
                                    type="text"
                                    name="kol"
                                    value=""
                                    placeholder=""
                                    id="calc_kol"
                                    maxlength="5"
                                    class="calc__step-form-control"
                            >

                        </div>
                        <!-- End Group Input -->

                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div class="calc__step-section">

                        <!-- Title -->
                        <h5 class="calc__step-title">
                            <span>04</span> <?= __( 'Форма изделия', 'adem' ) ?>
                        </h5>
                        <!-- End Title -->

                        <!-- Group Input -->
                        <div class="calc__step-form-group">

                            <select
                                    name="forma"
                                    id="calc_size_forma"
                                    class="calc__step-form-control"
                            >
                                <option value="0">Выберите форму</option>
                                <option value="Прямоугольник" data-price="1">Прямоугольник</option>
                            </select>

                        </div>
                        <!-- End Group Input -->

                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div class="calc__step-section">

                        <!-- Title -->
                        <h5 class="calc__step-title">
                            <span>05</span> <?= __( 'Обработка', 'adem' ) ?>
                        </h5>
                        <!-- End Title -->

                        <!-- Group Input -->
                        <div class="calc__step-form-group">

                            <select
                                    name="obrabotka"
                                    id="calc_obrabotka"
                                    class="calc__step-form-control"
                            >
                                <option value="0" data-price="0">Обработка</option>
                                <option value="Без обработки" data-price="0">Без обработки</option>
                                <option value="Шлифовка" data-price="60">Шлифовка</option>
                                <option value="Полировка" data-price="120">Полировка</option>

                                <option value="Фацет 10 мм" data-price="190">Фацет 10 мм</option>
                                <option value="Фацет 15 мм" data-price="190">Фацет 15 мм</option>
                                <option value="Фацет 20 мм" data-price="220">Фацет 20 мм</option>
                            </select>

                        </div>
                        <!-- End Group Input -->

                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div class="calc__step-section">

                        <!-- Title -->
                        <h5 class="calc__step-title">
                            <span>06</span> <?= __( 'Отверстия', 'adem' ) ?>
                        </h5>
                        <!-- End Title -->

                        <!-- Group Input -->
                        <div class="calc__step-form-group_input">

                            <!-- left -->
                            <div class="calc__step-form-group_input-left">

                                <select
                                        name="diametr_otverstia"
                                        class="calc__step-form-control"
                                        id="calc_size_diametr_otverstia"
                                >
                                    <option value="0">Выберите диаметр</option>
                                    <option value="5-12" data-price="1">5-12</option>
                                    <option value="13-30" data-price="1">13-30</option>
                                    <option value="31-100" data-price="1">31-100</option>
                                </select>

                            </div>
                            <!-- end left -->

                            <div class="separator">x</div>

                            <!-- right -->
                            <div class="calc__step-form-group_input-right">

                                <input
                                        type="text"
                                        name="otverstia"
                                        value=""
                                        placeholder="Количество"
                                        id="calc_otverstia"
                                        maxlength="5"
                                        class="calc__step-form-control"
                                        data-price="40"
                                >

                            </div>
                            <!-- end right -->

                        </div>
                        <!-- End Group Input -->

                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div class="calc__step-section">

                        <!-- Title -->
                        <h5 class="calc__step-title">
                            <span>07</span> <?= __( 'Доставка', 'adem' ) ?>
                        </h5>
                        <!-- End Title -->

                        <!-- Group Input -->
                        <div class="calc__step-form-group">

                            <select
                                    name="dostavka"
                                    id="calc_dostavka"
                                    class="calc__step-form-control"
                            >
                                <option value="0" data-price="0">Выбрать</option>
                                <option value="Самовывоз" data-price="0">Самовывоз</option>
                                <option value="Внутри Садового Кольца - 3000 руб." data-price="3000">Внутри Садового Кольца - 3000 руб.</option>
                                <option value="САО - 3000 руб." data-price="3000">САО - 3000 руб.</option>
                                <option value="СВАО - 2500 руб." data-price="2500">СВАО - 2500 руб.</option>
                                <option value="ВАО - 2500 руб." data-price="2500">ВАО - 2500 руб.</option>
                                <option value="ЮВАО - 2000 руб." data-price="2000">ЮВАО - 2000 руб.</option>
                                <option value="ЮАО - 2000 руб." data-price="2000">ЮАО - 2000 руб.</option>
                                <option value="ЮЗАО - 2000 руб." data-price="2000">ЮЗАО - 2000 руб.</option>
                                <option value="ЗАО - 2500 руб." data-price="2500">ЗАО - 2500 руб.</option>
                                <option value="СЗАО - 2500 руб." data-price="2500">СЗАО - 2500 руб.</option>
                                <option value="Яндекс Доставка - оплачивается покупателем напрямую перевозчику" data-price="0">Яндекс Доставка - оплачивается покупателем напрямую перевозчику</option>
                            </select>

                        </div>
                        <!-- End Group Input -->

                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div class="calc__step-section calc__step-section-footer">

                        <!-- Left -->
                        <div class="calc__step-section-footer-left">

                            <!-- Title -->
                            <h5 class="calc__step-title">
                                <?= __( 'Стоимость вашего заказа', 'adem' ) ?>
                            </h5>
                            <!-- End Title -->

                            <!-- price -->
                            <div class="price">
                                <strong id="calc__total__roz">0</strong>
                                <span>руб.</span>
                            </div>
                            <!-- end price -->

                            <!-- btn -->
                            <div class="calc__step-section-footer-btn">
                                <a href="#popup__calculator" data-fancybox data-src="#popup__calculator" class="btn btn-block btn-lg btn-shadow-light form_calc_button">
                                    <span><?= __( 'Сделать заказ', 'adem' ) ?></span>
                                </a>
                            </div>
                            <!-- end btn -->

                        </div>
                        <!-- End Left -->

                        <!-- Right -->
                        <div class="calc__step-section-footer-right">

                            <!-- Title -->
                            <h5 class="calc__step-title">
                                <?= __( 'Есть вопросы? Свяжитесь с менеджером:', 'adem' ) ?>
                            </h5>
                            <!-- End Title -->

                            <!-- phone -->
                            <div class="phone">
                                <a href="tel:+74991104587">+7 (499) 110-45-87</a>
                            </div>
                            <!-- end phone -->

                            <!-- socials -->
                            <div class="socials">

                                <?php if( have_rows( 'contacts-socials', 'options' ) ): ?>
                                    <!-- social -->
                                    <ul class="footer__row-contacts-social">
                                        <?php while ( have_rows( 'contacts-socials', 'options' ) ) : the_row(); ?>
                                            <li>
                                                <a href="<?= get_sub_field('contacts-socials-url') ?>" target="_blank">
                                                    <img
                                                            src="<?= get_sub_field('contacts-socials-icon') ?>"
                                                            alt="<?= get_sub_field('contacts-socials-title') ?>"
                                                            title="<?= get_sub_field('contacts-socials-title') ?>"
                                                            class="svg"
                                                    >
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                    <!-- end social -->
                                <?php endif; ?>

                                <div>
                                    <a href="mailto:<?= do_shortcode('[contacts type="email"]') ?>" class="email">
                                        <?= do_shortcode('[contacts type="email"]') ?>
                                    </a>
                                </div>

                            </div>
                            <!-- end socials -->

                        </div>
                        <!-- End Right -->



                    </div>
                    <!-- End Section -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

    </section>
    <!-- End Step -->

    <div style="display: none" id="popup__calculator">

        <?php
        get_template_part(
            'template-parts/partials/fancybox/form-calculator',
            '',
            []
        );
        ?>

    </div>

<?php
get_footer();
?>
<script>
    $(document).ready(function() {


        function calc(){
            const 	koeficient 					= 2.3,
                calc_default_1 				= 1000000,
                calc_default_2 				= 1000,
                calc_roznica 				= 0, //Процент розницы
                calc_field_kol 				= ($('#calc_kol').val()) ? $('#calc_kol').val() : 0,
                calc_field_size_start 		= ($('#calc_size_start').val()) ? $('#calc_size_start').val() : 0,
                calc_field_size_end 		= ($('#calc_size_end').val()) ? $('#calc_size_end').val() : 0,
                //calc_field_size_izdelie		= parseFloat((($('#calc_size_izdelie').data('price')) ? $('#calc_size_izdelie').data('price') : 0) * koeficient),
                calc_field_size_izdelie		= parseFloat((($('#calc_size_izdelie_price').val()) ? $('#calc_size_izdelie_price').val() : 0) * koeficient),
                calc_field_size_forma		= ($('#calc_size_forma option:selected').data('price')) ? $('#calc_size_forma option:selected').data('price') : 0,
                calc_field_obrabotka		= ($('#calc_obrabotka option:selected').data('price')) ? $('#calc_obrabotka option:selected').data('price') : 0,
                calc_field_virezi			= ($('#calc_virezi').val()) ? $('#calc_virezi').val() : 0,
                calc_field_virezi_price		= ($('#calc_virezi').data('price')) ? $('#calc_virezi').data('price') : 0,
                calc_field_otverstia		= ($('#calc_otverstia').val()) ? $('#calc_otverstia').val() : 0,
                calc_field_otverstia_price	= ($('#calc_size_diametr_otverstia option:selected').data('price')) ? $('#calc_size_diametr_otverstia option:selected').data('price') : 0,
                calc_field_plenka_bez		= ($('#calc_plenka_bez option:selected').data('price')) ? $('#calc_plenka_bez option:selected').data('price') : 0,
                calc_field_plenka_color		= ($('#calc_plenka_color option:selected').data('price')) ? $('#calc_plenka_color option:selected').data('price') : 0,
                calc_field_matirovka		= ($('#calc_matirovka option:selected').data('price')) ? $('#calc_matirovka option:selected').data('price') : 0,
                calc_field_fotopechat		= ($('#calc_fotopechat option:selected').data('price')) ? $('#calc_fotopechat option:selected').data('price') : 0,
                calc_dostavka		        = ($('#calc_dostavka option:selected').data('price')) ? $('#calc_dostavka option:selected').data('price') : 0;


            //console.log(calc_field_size_izdelie);
            let summ_obrabotka 		= (((parseFloat(calc_field_size_start) + parseFloat(calc_field_size_end)) * 2) * calc_field_obrabotka) / calc_default_2;
            let summ_izdelie 		= calc_field_size_start * calc_field_size_end * (calc_field_size_izdelie / calc_default_1);
            let summ_forma_izdelie 	= (calc_field_size_forma == 1) ? summ_izdelie * calc_field_size_forma : (summ_izdelie + (summ_izdelie * (calc_field_size_forma / 100))) + ((summ_obrabotka + (summ_obrabotka * 0.2)));
            let summ_virezi			= calc_field_virezi * calc_field_virezi_price;
            let summ_otverstia		= calc_field_otverstia * calc_field_otverstia_price;
            let summ_plenka_bez		= ((calc_field_size_start * calc_field_size_end) * calc_field_plenka_bez) / calc_default_1;
            let summ_plenka_color	= ((calc_field_size_start * calc_field_size_end) * calc_field_plenka_color) / calc_default_1;
            let summ_matirovka		= ((calc_field_size_start * calc_field_size_end) * calc_field_matirovka) / calc_default_1;
            let summ_fotopechat		= ((calc_field_size_start * calc_field_size_end) * calc_field_fotopechat) / calc_default_1;
            let summ_opt			= 0; //Сумма ОПТ
            let summ_roz			= 0; //Сумма Розница


            if( calc_field_size_izdelie > 0 ) {

                summ_opt = (parseFloat(summ_forma_izdelie) + parseFloat(summ_obrabotka) + parseFloat(summ_virezi) + parseFloat(summ_otverstia) + parseFloat(summ_plenka_bez) + parseFloat(summ_plenka_color) + parseFloat(summ_matirovka) + parseFloat(summ_fotopechat)) * calc_field_kol;


                summ_roz = (summ_opt + (summ_opt * (calc_roznica / 100))) + calc_dostavka;


                if( calc_field_size_start > 2000 || calc_field_size_end > 2000 ) {
                    summ_roz = summ_roz * 1.3;
                }

            }

            //var percent_number_step = $.animateNumber.numberStepFactories.append(' руб.');

            $('#calc__total__opt').animateNumber({
                number: summ_opt.toFixed(2),
                //numberStep: percent_number_step
            }, 100);

            $('#calc__total__roz').animateNumber({
                number: summ_roz.toFixed(2),
                //numberStep: percent_number_step
            }, 100);

            //console.log($('#calc_size_izdelie_price').val());


        }


        $(document).on('change','#calc_size_izdelie, #calc_size_forma, #calc_obrabotka, #calc_matirovka, #calc_plenka_bez, #calc_plenka_color, #calc_fotopechat, #calc_size_diametr_otverstia',function(e){

            calc();

        });

        $(document).on('keyup','#calc_size_start, #calc_size_end, #calc_kol, #calc_virezi, #calc_otverstia, #calc_plenka_color, #calc_fotopechat',function(e){

            calc();

        });

        $(document).on('click', '.form_calc_button', function(e) {


            $('#form_calc_size_izdelie').val( $('#calc_size_izdelie').val() );
            $('#form_calc_size_start').val( $('#calc_size_start').val() );
            $('#form_calc_size_end').val( $('#calc_size_end').val() );
            $('#form_calc_kol').val( $('#calc_kol').val() );
            $('#form_calc_otverstia_diametr').val( $('#calc_size_diametr_otverstia').val() );
            $('#form_calc_otverstia').val( $('#calc_otverstia').val() );
            $('#form_calc_obrabotka').val( $('#calc_obrabotka').val() );
            $('#form_calc_size_forma').val( $('#calc_size_forma').val() );
            $('#form_calc_dostavka').val( $('#calc_dostavka').val() );

            $('#form_calc_total').val( $('#calc__total__roz').text() );

            //e.preventDefault();

        });


        $(document).on('click', '.calcProduct', function(e) {

            let $this = $(this),
                price = $this.data('price'),
                name = $this.find('h3').text(),
                diametr_1 = $this.data('diametr-1'),
                diametr_2 = $this.data('diametr-2'),
                diametr_3 = $this.data('diametr-3');

            $('#calc_size_izdelie').val(name);
            $('#calc_size_izdelie').attr('data-price', price);
            $('#calc_size_izdelie_price').val(price);

            $('#calc_size_diametr_otverstia').html(
                '<option value="0">Выберите диаметр</option>' +
                '<option value="5-12" data-price="' + diametr_1 + '">5-12</option>' +
                '<option value="13-30" data-price="' + diametr_2 + '">13-30</option>' +
                '<option value="31-100" data-price="' + diametr_3 + '">31-100</option>'
            );

            $('.tab-content').find('.active_product').removeClass('active_product');
            $this.addClass('active_product');



            var id  = '#section_calc_1',
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 600);

            $('.section_calc').show();

            setTimeout(function (){
                calc();
            }, 300);


            e.preventDefault();

        });

        $(document).on('change keyup input click', '#calc_size_start, #calc_size_end, #calc_kol, #calc_otverstia', function() {
            if(this.value.match(/[^0-9]/g)){
                this.value = this.value.replace(/[^0-9]/g, "");
            };
        });

        $(document).on('change','#calc_dostavka',function(e){
            calc();
        });


    });
</script>
