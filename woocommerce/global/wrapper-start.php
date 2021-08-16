<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/*
 * Page Headpanel
 */
get_template_part( 'template-parts/partials/partial', 'pagehead' );
?>

<?php if(!is_product()) : ?>
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

                        <!-- filter -->
                        <div class="catalog__filter form">

                            <?php
                            $current_cat = get_queried_object();
                            $current_cat_ID = $current_cat->term_id;
                            $args_cat = array(
                                'taxonomy'      => 'product_cat',
                                'orderby'       => 'name',
                                'show_count'    => 0,
                                'pad_counts'    => 0,
                                'hierarchical'  => 0,
                                'hide_empty'    => 0,
                                'title_li'      => 0,
                                'parent'        => $current_cat_ID
                            );
                            $categories = get_categories( $args_cat );

                            if( $categories ) : ?>
                                <!-- Cell -->
                                <div class="catalog__filter-cell">
                                    <!-- Title -->
                                    <h5>
                                        <span><?= _e( 'Каталог', 'adem' ) ?></span>
                                    </h5>
                                    <!-- End Title -->
                                    <!-- List -->
                                    <ul class="form-group catalog__nav">
                                        <?php foreach ($categories as $category) : ?>
                                        <li>
                                            <a href="<?= get_category_link($category->term_id) ?>">
                                                <span><?= $category->name ?></span>
                                            </a>
                                            <?php
                                            //$children = get_term_children($category->term_id, 'product_cat');
                                            $args_cat_children = array(
                                                'taxonomy'      => 'product_cat',
                                                'orderby'       => 'name',
                                                'show_count'    => 0,
                                                'pad_counts'    => 0,
                                                'hierarchical'  => 0,
                                                'hide_empty'    => 0,
                                                'title_li'      => 0,
                                                'parent'        => $category->term_id
                                            );
                                            $childrens = get_categories( $args_cat_children );
                                            if( $childrens ) : ?>
                                                <ul>
                                                    <?php foreach ( $childrens as $children ) : ?>
                                                    <li>
                                                        <a href="<?= get_category_link($children->term_id) ?>">
                                                            <span><?= $children->name ?></span>
                                                        </a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <!-- End List -->
                                </div>
                                <!-- End Cell -->
                            <?php endif; ?>

                            <?= do_shortcode('[br_filters_group group_id=249]') ?>

                        </div>
                        <!-- end filter -->

                        <!-- news last -->
                        <div class="sidebar__row-left-footer">

                            <?= get_template_part( 'template-parts/partials/partial', 'news-last' ) ?>

                        </div>
                        <!-- end news last -->

                    </div>
                    <!-- end left -->

                    <!-- right -->
                    <div class="sidebar__row-right">





<?php else: ?>

    <!-- product -->
    <section class="product">
        <!-- container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

<?php endif; ?>