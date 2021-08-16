<?php
/*
Template Name: Резка стекла и зеркал
Template Post Type: page
*/

get_header();
?>

<?php
/*
 * Page Headpanel
 */
get_template_part( 'template-parts/partials/partial', 'pagehead' );
?>

    <!-- Rezka -->
    <section class="rezka">
        <!-- container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                    <!-- Intro -->
                    <div class="rezka__intro" style="background-image: url('<?= get_the_post_thumbnail_url( get_the_ID(), 'full') ?>')">

                        <!-- Container -->
                        <div class="rezka__intro-container">

                            <!-- Title -->
                            <h1>
                                <?= get_the_title() ?>
                            </h1>
                            <!-- End Title -->

                            <?php if( have_rows( 'rezka-advantages', get_the_ID() ) ) : ?>
                            <!-- List -->
                            <ul>
                                <?php while ( have_rows( 'rezka-advantages', get_the_ID() ) ) : the_row(); ?>
                                <li>
                                    <i class="fa <?= get_sub_field('rezka-advantages-icon') ?>"></i>
                                    <span><?= get_sub_field('rezka-advantages-title') ?></span>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <!-- End List -->
                            <?php endif; ?>

                        </div>
                        <!-- End Container -->

                    </div>
                    <!-- End Intro -->

                    <!-- One -->
                    <div class="rezka__one">

                        <!-- Title -->
                        <h2 class="h5 rezka__one-title">
                            <?= get_field( 'rezka-services-title', get_the_ID() ) ?>
                        </h2>
                        <!-- End Title -->

                        <?php if( have_rows( 'rezka-services-list', get_the_ID() ) ) : ?>
                        <!-- List -->
                        <ul class="rezka__one-list row">
                            <?php while ( have_rows( 'rezka-services-list', get_the_ID() ) ) : the_row(); ?>
                            <li>
                                <!-- Image -->
                                <div class="rezka__one-list--image">
                                    <img
                                            src="<?= kama_thumb_src('w=180 &h=180 &attach_id=' . get_sub_field( 'rezka-services-list-image' )) ?>"
                                            alt=""
                                            title=""
                                            class="img-responsive"
                                    >
                                </div>
                                <!-- End Image -->

                                <!-- Title -->
                                <span>
                                        <?= get_sub_field('rezka-services-list-title') ?>
                                    </span>
                                <!-- End Title -->

                                <!-- Text -->
                                <p>
                                    <?= get_sub_field('rezka-services-list-text') ?>
                                </p>
                                <!-- End Text -->

                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <!-- End List -->
                        <?php endif; ?>

                    </div>
                    <!-- End One -->

                    <!-- Two -->
                    <div class="rezka__two">

                        <!-- Title -->
                        <h2 class="h5 rezka__two-title">
                                <span>
                                    <?= get_field( 'rezka-price-title', get_the_ID() ) ?>
                                </span>
                        </h2>
                        <!-- End Title -->

                        <!-- Text -->
                        <div class="rezka__two-text">
                            <?= get_field( 'rezka-price-text', get_the_ID() ) ?>
                        </div>
                        <!-- End Text -->

                        <?php if( have_rows( 'rezka-price-list', get_the_ID() ) ) : ?>
                        <!-- List -->
                        <ul class="rezka__two-list">
                            <?php while ( have_rows( 'rezka-price-list', get_the_ID() ) ) : the_row(); ?>
                            <li>
                                <p><?= get_sub_field('rezka-price-list-title') ?></p>
                                <strong><?= get_sub_field('rezka-price-list-value') ?></strong>
                                <span><?= get_sub_field('rezka-price-list-text') ?></span>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <!-- End List -->
                        <?php endif; ?>

                    </div>
                    <!-- End Two -->

                    <!-- Three -->
                    <div class="rezka__three">

                        <!-- List -->
                        <ul class="rezka__three-list">
                            <li>
                                <div>
                                                                            <span>
                                        Наличие на складе
                                    </span>
                                    <img
                                            src="<?= get_template_directory_uri() ?>/assets/css/images/rezka-delivery-ils-left.png"
                                            alt=""
                                            title=""
                                            class="img-responsive center-block"
                                    >
                                    <p>На складе около 330 видов матового стекла с рисунком, зеркал с узором, матового стекла и зеркал бесцветного и бронзы.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                                                            <span>
                                        Прямые поставки
                                    </span>
                                    <img
                                            src="<?= get_template_directory_uri() ?>/assets/css/images/rezka-delivery-ils-right.png"
                                            alt=""
                                            title=""
                                            class="img-responsive center-block"
                                    >
                                    <p>За счет прямых поставок мебельного стекла и зеркал из Европы, Китая и Украины, у нас один из самых широких ассортиментов в России.</p>
                                </div>
                            </li>
                        </ul>
                        <!-- End List -->

                    </div>
                    <!-- End Three -->

                    <!-- Four -->
                    <div class="rezka__four" id="rezkaProcess">

                        <!-- Title -->
                        <h4 class="h5 rezka__four-title">
                            <?= get_field( 'rezka-process-title', get_the_ID() ) ?>
                        </h4>
                        <!-- End Title -->

                        <?php if( have_rows( 'rezka-process-list', get_the_ID() ) ) : ?>
                        <!-- List -->
                        <ul class="rezka__four-list rezkaProcess">
                            <?php $i=0; while ( have_rows( 'rezka-process-list', get_the_ID() ) ) : the_row(); ?>
                            <li>
                                <input
                                        id="check<?= $i ?>"
                                        type="checkbox"
                                        name="typer[]"
                                        value="<?= get_sub_field('rezka-process-list-title') ?>"
                                >
                                <label for="check<?= $i ?>">
                                    <img
                                            src="<?= get_sub_field('rezka-process-list-image') ?>"
                                            alt=""
                                            title=""
                                    >
                                    <span><?= get_sub_field('rezka-process-list-title') ?></span>
                                </label>
                            </li>
                            <?php $i++; endwhile; ?>
                        </ul>
                        <!-- End List -->
                        <?php endif; ?>

                        <!-- Footer -->
                        <div class="text-center rezka__four-footer">
                            <a href="#" class="btn btn-white btn-lg btn-shadow-light" id="rezkaProcessNext">
                                <span>Далее</span>
                            </a>
                        </div>
                        <!-- End Footer -->

                    </div>
                    <!-- End Four -->

                    <!-- Five -->
                    <div class="rezka__five" id="rezkaMaterial">

                        <!-- Title -->
                        <h4 class="h5 rezka__five-title">
                            <?= get_field( 'rezka-materials-title', get_the_ID() ) ?>
                        </h4>
                        <!-- End Title -->

                        <?php if( have_rows( 'rezka-materials-list', get_the_ID() ) ) : ?>
                        <!-- List -->
                        <ul class="rezka__five-list row rezkaMaterial">
                            <?php $i=0; while ( have_rows( 'rezka-materials-list', get_the_ID() ) ) : the_row(); ?>
                            <li>
                                <input
                                        id="check-pr-<?= $i ?>"
                                        type="checkbox"
                                        name="products[]"
                                        value="<?= get_sub_field('rezka-materials-list-title') ?>"
                                >
                                <label for="check-pr-<?= $i ?>">
                                    <!-- Title -->
                                    <div class="rezka__five-list--title">
                                        <?= get_sub_field('rezka-materials-list-title') ?>
                                    </div>
                                    <!-- End Title -->

                                    <!-- Image -->
                                    <div class="rezka__five-list--image">
                                        <img
                                                src="<?= kama_thumb_src('w=160 &h=160 &attach_id=' . get_sub_field( 'rezka-materials-list-image' )) ?>"
                                                alt="<?= get_sub_field('rezka-materials-list-title') ?>"
                                                title="<?= get_sub_field('rezka-materials-list-title') ?>"
                                                class="img-responsive center-block"
                                        >
                                    </div>
                                    <!-- End Image -->
                                </label>
                            </li>
                            <?php $i++; endwhile; ?>
                        </ul>
                        <!-- End List -->
                        <?php endif; ?>

                    </div>
                    <!-- End Five -->

                    <!-- Six -->
                    <div class="rezka__six">

                        <!-- Title -->
                        <h4 class="h5 rezka__six-title">
                            <?= get_field( 'rezka-form-title', get_the_ID() ) ?>
                        </h4>
                        <!-- End Title -->

                        <!-- Form -->
                        <div class="rezka__six-form">

                            <p>
                                <?= get_field( 'rezka-form-text', get_the_ID() ) ?>
                            </p>

                            <?= do_shortcode( '[contact-form-7 id="1330" title="Резка стекла и зеркал" html_class="form row rezkaForm"]' ) ?>

                            <small>
                                Оставьте Ваши данные и наш менеджер свяжется с Вам в ближайшее время для уточнения деталей
                            </small>

                        </div>
                        <!-- End Form -->

                    </div>
                    <!-- End Six -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- End Rezka -->

<?php
get_footer();