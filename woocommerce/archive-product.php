<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
    <!-- header -->
    <div class="catalog__header">
        <!-- left -->
        <div class="catalog__header-left">

            <!-- flex -->
            <div>
                <!-- title page -->
                <h1><?php woocommerce_page_title(); ?></h1>
                <!-- end title page -->

                <?= do_shortcode('[br_filter_single filter_id=250]') ?>

            </div>
            <!-- end flex -->

        </div>
        <!-- end left -->
        <!-- right -->
        <div class="catalog__header-right">

            <?php
            $icon_list = get_field( 'settings-catalog-advantages', 'options' );
            ?>
            <?php if(!$icon_list['settings-catalog-advantages-hide']) : ?>
                <?php if( $icon_list['settings-catalog-advantages-list'] ) : ?>
                <!-- icons -->
                <ul class="catalog__header-right-icons">
                    <?php foreach ($icon_list['settings-catalog-advantages-list'] as $val) : ?>
                    <li>
                        <img
                                src="<?= $val['settings-catalog-advantages-list-icon'] ?>"
                                alt="<?= $val['settings-catalog-advantages-list-title'] ?>"
                                title="<?= $val['settings-catalog-advantages-list-title'] ?>"
                                class="svg"
                        >
                        <span><?= $val['settings-catalog-advantages-list-title'] ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <!-- end icons -->
                <?php endif; ?>
            <?php endif; ?>

            <!-- button -->
<!--            <button type="button" class="catalog__header-right-button openSidebarLeft">-->
<!--                <img-->
<!--                        src="--><?//= get_template_directory_uri() ?><!--/assets/css/images/icon-filter.svg"-->
<!--                        alt=""-->
<!--                        title=""-->
<!--                        class="svg"-->
<!--                >-->
<!--            </button>-->
<!--            <a href="#close" class="catalog__header-right-overlay openSidebarLeft"></a>-->
            <!-- end button -->

        </div>
        <!-- end right -->
    </div>
    <!-- end header -->
<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>


<?php
$current_cat = get_queried_object();
$current_cat_ID = $current_cat->term_id;
?>

<?php
$banners = get_field( 'settings-catalog-banners', 'options' );
$active_banner = [];
if( $banners['list'] ) :
    foreach ($banners['list'] as $key => $list) :
        $act = array_search($current_cat_ID, $list['category']);
        if($act) :
            $active_banner = $list['banners'];
        endif;
    endforeach;

    if( $active_banner ) :
?>
        <!-- Banners -->
        <div class="catalog__banners">
            <!-- container -->
            <div class="swiper-container">
                <!-- wrapper -->
                <div class="swiper-wrapper">
                    <?php foreach ( $active_banner as $banner ) : ?>
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <?php
                            $lnk_open   = null;
                            $lnk_close  = null;
                            if( $banner['link'] ) :
                                $lnk_open = '<a href="' . $banner['link']['url'] . '">';
                                $lnk_close = '</a>';
                            endif;
                            ?>

                            <?= $lnk_open ?>
                            <img
                                    src="<?= $banner['banner'] ?>"
                                    alt=""
                                    title=""
                                    class="img-responsive"
                            >
                            <?= $lnk_close ?>
                        </div>
                        <!-- End Slide -->
                    <?php endforeach; ?>
                </div>
                <!-- end wrapper -->
                <!-- pagination -->
                <div class="swiper-pagination"></div>
                <!-- end pagination -->
            </div>
            <!-- end container -->
        </div>
        <!-- End Banners -->
<?php
    endif;
endif;
?>




<?php

$args_cat = array(
    'taxonomy'      => 'product_cat',
    'orderby'       => 'name',
    'show_count'    => 0,
    'pad_counts'    => 0,
    'hierarchical'  => 1,
    'hide_empty'    => 0,
    'title_li'      => 0,
    'parent'        => $current_cat_ID
);
$categories = get_categories( $args_cat );
if( $categories ) :
?>

<div class="catalog__category">
    <ul class="row">
        <?php foreach ($categories as $category) : ?>
        <li>
            <a href="<?= get_category_link($category->term_id) ?>">
                <div class="catalog__category-image">
                    <?php
                    $category_thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
                    if( $category_thumbnail_id == 0 ) {
                        echo kama_thumb_img('h=300 &w=300 &class=img-responsive', get_template_directory_uri() . '/assets/css/images/placeholder.jpg');
                    }else{
                        echo kama_thumb_img( 'w=300 &h=300 &class=img-responsive &attach_id=' . $category_thumbnail_id );
                    }
                    ?>
                </div>
                <span><?= $category->name ?></span>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>

<?php endif; ?>


<?php

if( ! $categories ) :
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}
endif;
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
