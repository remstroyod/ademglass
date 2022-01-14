<?php
/*
 * Footer
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
/*
 * @adem_footer_TagFooterOpen
*/
add_action( 'footer_parts', 'adem_footer_TagFooterOpen', 20 );
function adem_footer_TagFooterOpen() {
    ?>
    <!-- FOOTER -->
    <footer>
    <?php
};
/*
 * @adem_footer_TagFooterInner
*/
add_action( 'footer_parts', 'adem_footer_TagFooterInner', 30 );
function adem_footer_TagFooterInner() {
    ?>

    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                <!-- footer -->
                <div class="footer">

                    <!-- row -->
                    <div class="footer__row">
                        <!-- column -->
                        <div class="footer__row-column footer-swiper">

                            <?php if( have_rows( 'contacts-gallery', 'options' ) ) : ?>
                            <!-- swiper-container -->
                            <div class="carousel swiper-container">
                                <!-- swiper-wrapper -->
                                <div class="swiper-wrapper">
                                    <?php while ( have_rows( 'contacts-gallery', 'options' ) ) : the_row(); ?>
                                    <!-- slide -->
                                    <div class="swiper-slide">
                                        <img
                                                src="<?= kama_thumb_src('w=1000 &h=600 &attach_id=' . get_sub_field('contacts-gallery-image')) ?>"
                                                alt="<?= get_sub_field('contacts-gallery-alt') ?>"
                                                title="<?= get_sub_field('contacts-gallery-title') ?>"
                                        >
                                    </div>
                                    <!-- end slide -->
                                    <?php endwhile; ?>
                                </div>
                                <!-- end swiper-wrapper -->
                            </div>
                            <!-- end swiper-container -->
                            <!-- controls -->
                            <div class="swiper-controls">
                                <!-- btn > prev -->
                                <div class="swiper-button-prev swiper-button-opacity">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <!-- end btn > prev -->
                                <!-- pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- end pagination -->
                                <!-- btn > next -->
                                <div class="swiper-button-next swiper-button-opacity">
                                    <i class="fa fa-angle-right"></i>
                                </div>
                                <!-- end btn > next -->
                            </div>
                            <!-- end controls -->
                            <?php endif; ?>

                        </div>
                        <!-- end column -->
                        <!-- column -->
                        <div class="footer__row-column footer__row-column-right">

                            <!-- form -->
                            <div class="footer__row-form">

                                <!-- border block -->
                                <div>
                                    <!-- center block -->
                                    <div>
                                        <!-- title -->
                                        <h5 class="footer__row-form-title">
                                            Есть вопрос? Напишите нам
                                        </h5>
                                        <!-- end title -->
                                        <small>Оставьте Ваши данные и наш менеджер свяжется с Вами в течении 15 минут</small>
                                        <!-- form > row -->
                                        <?= do_shortcode('[contact-form-7 id="7" title="Контактная форма в футере" html_class="form row"]') ?>
                                        <!-- end form > row -->
                                    </div>
                                    <!-- end center block -->

                                </div>
                                <!-- end border block -->

                            </div>
                            <!-- end form -->

                        </div>
                        <!-- end column -->
                    </div>
                    <!-- end row -->

                    <!-- row -->
                    <div class="footer__row">
                        <!-- column -->
                        <div class="footer__row-column">

                            <!-- map -->
                            <div class="footer__row-map" id="footer-map"></div>
                            <!-- end map -->

                        </div>
                        <!-- end column -->
                        <!-- column -->
                        <div class="footer__row-column footer__row-column-right">

                            <!-- contacts -->
                            <div class="footer__row-contacts">

                                <!-- top -->
                                <ul class="footer__row-contacts-top">
                                    <li>
                                        <!-- icon -->
                                        <div>
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/icon-location.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                        </div>
                                        <!-- end icon -->
                                        <p><?= do_shortcode('[contacts type="address"]') ?></p>
                                    </li>
                                    <li>
                                        <!-- icon -->
                                        <div>
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/icon-time.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                        </div>
                                        <!-- end icon -->
                                        <p><?= do_shortcode('[contacts type="timework"]') ?></p>
                                    </li>
                                    <li>
                                        <!-- icon -->
                                        <div>
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/icon-time.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                        </div>
                                        <!-- end icon -->
                                        <p><?= do_shortcode('[contacts type="timeworksklad"]') ?></p>
                                    </li>
                                </ul>
                                <!-- end top -->
                                <!-- center -->
                                <div class="footer__row-contacts-center">
                                    <div>
                                        <a href="tel:<?= phone_replace(do_shortcode('[contacts type="tel"]')) ?>" class="tel">
                                            <?= do_shortcode('[contacts type="tel"]') ?>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="mailto:<?= do_shortcode('[contacts type="email"]') ?>" class="email">
                                            <?= do_shortcode('[contacts type="email"]') ?>
                                        </a>
                                    </div>
                                </div>
                                <!-- end center -->

                                <!-- Title -->
                                <h6 class="footer__row-title"><?= __( 'Стеклянные перегородки и двери ARTELLE', 'adem' ) ?></h6>
                                <!-- End Title -->

                                <!-- top -->
                                <ul class="footer__row-contacts-top">
                                    <li>
                                        <!-- icon -->
                                        <div>
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/icon-location.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                        </div>
                                        <!-- end icon -->
                                        <p><?= do_shortcode('[contacts type="doors-address"]') ?></p>
                                    </li>
                                    <li>
                                        <!-- icon -->
                                        <div>
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/icon-time.svg"
                                                    alt=""
                                                    title=""
                                                    class="svg"
                                            >
                                        </div>
                                        <!-- end icon -->
                                        <p><?= do_shortcode('[contacts type="doors-time"]') ?></p>
                                    </li>
                                </ul>
                                <!-- end top -->
                                <!-- center -->
                                <div class="footer__row-contacts-center">
                                    <div>
                                        <a href="tel:<?= phone_replace(do_shortcode('[contacts type="doors-tel"]')) ?>" class="tel">
                                            <?= do_shortcode('[contacts type="doors-tel"]') ?>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="mailto:<?= do_shortcode('[contacts type="doors-email"]') ?>" class="email">
                                            <?= do_shortcode('[contacts type="doors-email"]') ?>
                                        </a>
                                    </div>
                                </div>
                                <!-- end center -->




                                <?php if( have_rows( 'contacts-socials', 'options' ) ): ?>
                                    <!-- social -->
                                    <ul class="footer__row-contacts-social">
                                        <?php while ( have_rows( 'contacts-socials', 'options' ) ) : the_row(); ?>
                                            <?php if( get_sub_field('contacts-socials-footer') ) : ?>
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
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                    <!-- end social -->
                                <?php endif; ?>
                            </div>
                            <!-- end contacts -->

                            <!-- contacts -->
                            <div class="footer__row-footer">

                                <!-- -menu -->
                                <?php
                                /*
                                 * Args Nav Menu
                                 */
                                $args = array(
                                    'theme_location'    => 'footer-menu',
                                    'container'         => '',
                                    'container_class'   => '',
                                    'menu_class'        => '',
                                    'items_wrap'        => '<ul class="footer__row-footer-menu">%3$s</ul>'
                                );
                                wp_nav_menu($args);
                                ?>
                                <!-- end -menu -->

                                <!-- copyright -->
                                <div class="footer__row-footer-copyright">
                                    <?php
                                    echo sprintf('%s - %s %s',
                                        2013,
                                        date('Y'),
                                        __( '«Адэм»', 'adem' )
                                    );
                                    ?>.
                                </div>
                                <!-- end copyright -->

                            </div>
                            <!-- end contacts -->

                        </div>
                        <!-- end column -->
                    </div>
                    <!-- end row -->

                </div>
                <!-- end footer -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->


    <div class="footer__footer">
        <?= __( 'Сайт носит исключительно информационный характер и не является публичной офёртой', 'adem' ) ?>
    </div>

    <?php
};
/*
 * @adem_footer_TagFooterClose
*/
add_action( 'footer_parts', 'adem_footer_TagFooterClose', 100 );
function adem_footer_TagFooterClose() {
    ?>
    </footer>
    <!-- END FOOTER -->
    <?php
};
