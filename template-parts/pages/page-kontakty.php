<?php
/*
 * Page: Contacts
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
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
<!--                <div class="sidebar__row">-->

                    <!-- left -->
<!--                    <div class="sidebar__row-left">-->
<!---->
<!---->
<!--                        <div class="sidebar__menu">-->
<!--                            --><?//= get_template_part( 'template-parts/partials/partial', 'leftmenu-one' ); ?>
<!--                            --><?//= get_template_part( 'template-parts/partials/partial', 'leftmenu-two' ); ?>
<!--                        </div>-->
<!---->
<!---->
<!---->
<!--                        <div class="sidebar__row-left-footer">-->
<!--                            --><?//= get_template_part( 'template-parts/partials/partial', 'news-last' ) ?>
<!--                        </div>-->
<!---->
<!---->
<!--                    </div>-->
                    <!-- end left -->


                    <!-- right -->
<!--                    <div class="sidebar__row-right">-->

                        <?= get_template_part('template-parts/partials/partial', 'titlepage'); ?>

                        <!-- contacts -->
                        <div class="contacts">

                            <!-- Contact -->
                            <div class="contacts__contact row">

                                <!-- col -->
                                <div class="col-xs-24 col-sm-10 col-md-10 col-lg-10">

                                    <!-- Title -->
                                    <div class="contacts__contact-title">
                                        <span class="h6">
                                            <?= _e( 'Офис и оптовый склад «Адэм»', 'adem' ) ?>
                                        </span>
                                    </div>
                                    <!-- End Title -->

                                    <!-- Info -->
                                    <ul class="contacts__contact-info">
                                        <li>
                                            <!-- icon -->
                                            <div class="contacts__contact-info--icon">
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
                                            <div class="contacts__contact-info--icon">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/assets/css/images/icon-envelope.svg"
                                                        alt=""
                                                        title=""
                                                        class="svg envelope"
                                                >
                                            </div>
                                            <!-- end icon -->
                                            <a href="mailto:<?= do_shortcode('[contacts type="email"]') ?>" class="email">
                                                <?= do_shortcode('[contacts type="email"]') ?>
                                            </a>
                                        </li>
                                        <li>
                                            <!-- icon -->
                                            <div class="contacts__contact-info--icon">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/assets/css/images/icon-hourglass.svg"
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
                                            <div class="contacts__contact-info--icon">
                                                <img
                                                        src="<?= get_template_directory_uri() ?>/assets/css/images/icon-hourglass.svg"
                                                        alt=""
                                                        title=""
                                                        class="svg"
                                                >
                                            </div>
                                            <!-- end icon -->
                                            <p><?= do_shortcode('[contacts type="timeworksklad"]') ?></p>
                                        </li>
                                    </ul>
                                    <!-- End Info -->

                                </div>
                                <!-- end col -->

                                <!-- col -->
                                <div class="col-xs-24 col-sm-14 col-md-14 col-lg-14">

                                    <!-- Title -->
                                    <div class="contacts__contact-title">

                                        <?php if( have_rows( 'contacts-socials', 'options' ) ): ?>
                                            <!-- social -->
                                            <ul class="contacts__social">
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

                                    </div>
                                    <!-- End Title -->

                                    <?php if( have_rows( 'contacts-phone-list', 'options' ) ): ?>
                                    <!-- Phone -->
                                    <ul class="contacts__contact-phone">
                                        <?php while ( have_rows( 'contacts-phone-list', 'options' ) ) : the_row(); ?>
                                        <li>
                                            <!-- Tel -->
                                            <div class="contacts__contact-phone--tel">
                                                <a href="tel:<?= phone_replace( get_sub_field('contacts-phone-list-tel') ) ?>">
                                                    <?= get_sub_field('contacts-phone-list-tel') ?>
                                                </a>
                                            </div>
                                            <!-- End Tel -->
                                            <!-- Title -->
                                            <div class="contacts__contact-phone--title">
                                                <span><?= get_sub_field('contacts-phone-list-title') ?></span>
                                            </div>
                                            <!-- End Title -->
                                        </li>
                                        <?php endwhile; ?>
                                    </ul>
                                    <!-- End Phone -->
                                    <?php endif; ?>

                                </div>
                                <!-- end col -->

                            </div>
                            <!-- End Contact -->

                            <!-- Map -->
                            <div class="contacts__map" id="contacts-map">

                            </div>
                            <!-- End Map -->

                        </div>
                        <!-- end contacts -->

<!--                    </div>-->
                    <!-- end right -->

<!--                </div>-->
                <!-- end row -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end sidebar -->
