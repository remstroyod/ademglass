<?php
if ( ! defined('ABSPATH')) :
	exit();
endif;
/*
 * @adem_header_TagHeaderOpen
*/
add_action( 'header_parts', 'adem_header_TagHeaderOpen', 10 );
function adem_header_TagHeaderOpen() {
	?>
  	<!-- HEADER -->
    <header class="default">
	<?php
};
/*
 * @adem_header_TagHeaderInner
*/
add_action( 'header_parts', 'adem_header_TagHeaderInner', 20 );
function adem_header_TagHeaderInner() {
	?>

    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">
                <!-- header -->
                <div class="header">

                    <div class="header__top">

                        <div class="header__top-row">

                            <!-- logo -->
                            <a href="<?= get_home_url() ?>" class="header__logo">

                                <!-- logo -->
                                <?php
                                $logo_black = get_theme_mod( 'logo_header_black' );
                                $logo_white = get_theme_mod( 'logo_header_white' );
                                ?>
                                <img
                                        src="<?= $logo_black ?>"
                                        alt="<?= get_bloginfo('name') ?>"
                                        title="<?= get_bloginfo('name') ?>"
                                        class="header__logo-black"
                                >
                                <img
                                        src="<?= $logo_white ?>"
                                        alt="<?= get_bloginfo('name') ?>"
                                        title="<?= get_bloginfo('name') ?>"
                                        class="header__logo-white"
                                >
                            </a>
                            <!-- end logo -->

                            <!-- nav -->
                            <div class="header__nav">
                                <?php
                                /*
                                 * Args Nav Menu
                                 */
                                $args = array(
                                    'theme_location'    => 'header-menu',
                                    'container'         => '',
                                    'container_class'   => '',
                                    'menu_class'        => '',
                                    'items_wrap'        => '<ul class="header__nav-list">%3$s</ul>'
                                );
                                wp_nav_menu($args);
                                ?>
                            </div>
                            <!-- end nav -->

                            <?php if( have_rows( 'contacts-city-list', 'options' ) ) : ?>
                                <!-- contacts -->
                                <div class="header__contacts">
                                    <?php
                                    $city_list = get_field( 'contacts-city-list', 'options' );
                                    $city_active = array_filter($city_list, function ($var) {
                                        return ($var['contacts-city-list-cityactive'] == 1);
                                    });
                                    ?>
                                    <!-- city -->
                                    <div class="header__contacts-city">

                                        <a
                                                href="#location"
                                                class="header__contacts-city-dropdown dropdown-toggle"
                                                type="button"
                                                id="header__contacts-city-list"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                        >
                                            <span>г. <?= $city_active[0]['contacts-city-list-title'] ?></span>
                                            <i class="fa fa-angle-down"></i>
                                        </a>

                                        <ul class="dropdown-menu header__contacts-city-list" aria-labelledby="header__contacts-city-list">
                                            <?php while ( have_rows( 'contacts-city-list', 'options' ) ) : the_row(); ?>

                                                <li>
                                                    <a href="<?= get_sub_field('contacts-city-list-url') ?>">
                                                        <?= get_sub_field('contacts-city-list-title') ?>
                                                    </a>
                                                </li>

                                            <?php endwhile; ?>
                                        </ul>

                                    </div>
                                    <!-- end city -->

                                    <!-- phone -->
                                    <div class="header__contacts-phone">

                                        <a href="<?= do_shortcode('[contacts type="whatsapp"]') ?>" class="header__contacts-phone-social" target="_blank">
                                            <img
                                                    src="<?= get_template_directory_uri() ?>/assets/css/images/icon_whatsapp.png"
                                                    alt=""
                                                    title=""
                                            >
                                        </a>

                                        <!-- phone > right -->
                                        <div class="header__contacts-phone-right">

                                            <a href="tel:<?= phone_replace(do_shortcode('[contacts type="tel"]')) ?>" class="header__contacts-phone-tel">
                                                <span>
                                    <?= do_shortcode('[contacts type="tel"]') ?>
                                </span>
                                            </a>
                                            <a href="mailto:<?= do_shortcode('[contacts type="email"]') ?>" class="header__contacts-phone-email">
                                                <span><?= do_shortcode('[contacts type="email"]') ?></span>
                                            </a>

                                        </div>
                                        <!-- end phone > right -->

                                    </div>
                                    <!-- end phone -->

                                </div>
                                <!-- end contacts -->
                            <?php endif; ?>

                        </div>

                    </div>

                    <!-- Bottom -->
                    <div class="header__bottom">

                        <!-- Row -->
                        <div class="header__bottom-row">

                            <!-- Menu -->
                            <?php
                            /*
                             * Args Nav Menu
                             */
                            $args = array(
                                'theme_location'    => 'header-menu-bottom',
                                'container'         => '',
                                'container_class'   => '',
                                'menu_class'        => '',
                                'items_wrap'        => '<ul class="header__menu">%3$s</ul>'
                            );
                            wp_nav_menu($args);
                            ?>
                            <!-- End Menu -->

                            <!-- Search -->
                            <div class="header__search">
                                <?php echo get_search_form(); ?>
                            </div>
                            <!-- End Search -->

                        </div>
                        <!-- End Row -->

                    </div>
                    <!-- End Bottom -->







                        <!-- openMenu -->
                        <button type="button" class="openMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- end openMenu -->


                </div>
                <!-- end header -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

	<?php
};
/*
 * @adem_header_TagHeaderClose
*/
add_action( 'header_parts', 'adem_header_TagHeaderClose', 30 );
function adem_header_TagHeaderClose() {
	?>
  	</header>
  	<!-- END HEADER -->

    <!-- MEGAMENU -->
    <div class="megamenu">
        <!-- container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                    <!-- inner -->
                    <div class="megamenu__inner">

                        <!-- left -->
                        <div class="megamenu__inner-left">

                            <?php
                            $args = array(
                                'taxonomy'      => 'product_cat',
                                'orderby'       => 'name',
                                'hierarchical'  => 1,
                                'hide_empty'    => false,
                                'parent'        => 0
                            );
                            $all_categories = get_categories( $args );
                            if($all_categories) :
                            ?>
                                <!-- menu -->
                                <ul class="megamenu__menu">
                                    <?php foreach ($all_categories as $cat) : ?>
                                        <li>
                                            <a href="<?= get_category_link($cat->term_id) ?>"><?= $cat->name ?></a>
                                            <?php
                                            $args_sub = array(
                                                'taxonomy'      => 'product_cat',
                                                'orderby'       => 'name',
                                                'parent'        => $cat->term_id,
                                                'hierarchical'  => 1,
                                                'hide_empty'    => false
                                            );
                                            $all_categories_sub = get_categories( $args_sub );
                                            if($all_categories_sub) : ?>
                                                <ul>
                                                    <?php foreach ($all_categories_sub as $cat_sub) : ?>
                                                    <li>
                                                        <a href="<?= get_category_link($cat_sub->term_id) ?>"><?= $cat_sub->name ?></a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <!-- end menu -->
                            <?php endif; ?>

                        </div>
                        <!-- end left -->

                        <!-- right -->
                        <div class="megamenu__inner-right megamenu__download">

                            <!-- img -->
                            <div>
                                <img
                                        src="<?= get_field( 'settings-download-image', 'options' ) ?>"
                                        alt="Скачать каталог"
                                        title="Скачать каталог"
                                        class="img-responsive"
                                >
                            </div>
                            <!-- end img -->

                            <a href="<?= get_the_permalink(51) ?>" class="btn btn-block btn-opacity">
                                <span>Посмотреть цены</span>
                            </a>
                            <a href="<?= get_field( 'settings-download-file', 'options' ) ?>" class="btn btn-block">
                                <span>Скачать каталог</span>
                            </a>
                        </div>
                        <!-- end right -->

                    </div>
                    <!-- end inner -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end MEGAMENU -->

	<?php
};
