<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

/**
 * Title Product
 */
$post_title = $product->get_title();
/**
 * ID Single Image
 */
$post_thumbnail_id = $product->get_image_id();
/**
 * Array Gallery
 */
$attachment_ids = $product->get_gallery_image_ids();
?>
<!-- gallery -->
<div class="product__row-gallery">

    <!-- swiper -->
    <div class="product__row-gallery-swiper product-swiper">

        <!-- carousel -->
        <div class="carousel swiper-container">
            <!-- wrapper -->
            <div class="swiper-wrapper">

                <!-- slide -->
                <div class="swiper-slide">
                    <a
                            href="<?= wp_get_attachment_image_url($post_thumbnail_id, 'full') ?>"
                            data-src="<?= wp_get_attachment_image_url($post_thumbnail_id, 'full') ?>"
                            data-fancybox="product"
                    >
                        <img
                                src="<?= wp_get_attachment_image_url($post_thumbnail_id, 'full') ?>"
                                data-src="<?= wp_get_attachment_image_url($post_thumbnail_id, 'full') ?>"
                                alt="<?= $post_title ?>"
                                title="<?= $post_title ?>"
                                class=""
                        >
                    </a>
                </div>
                <!-- end slide -->
                <?php if($attachment_ids) : foreach ($attachment_ids as $thumb) : ?>
                    <!-- slide -->
                    <div class="swiper-slide">
                        <img
                                src="<?= kama_thumb_src('w=1000 &h=600 &q=75 &crop=false &attach_id='.$thumb) ?>"
                                data-src="<?= kama_thumb_src('w=1000 &h=600 &q=75 &crop=false &attach_id='.$thumb) ?>"
                                alt="<?= $post_title ?>"
                                title="<?= $post_title ?>"
                                class=""
                        >
                    </div>
                    <!-- end slide -->
                    <?php endforeach; endif; ?>
            </div>
            <!-- end wrapper -->
        </div>
        <!-- end carousel -->

        <!-- controls -->
<!--        <div class="swiper-controls hidden-xs">-->
<!---->
<!--            <div class="swiper-button-prev">-->
<!--                <i class="fa fa-angle-left"></i>-->
<!--            </div>-->
<!---->
<!--            <div class="swiper-pagination"></div>-->
<!---->
<!--            <div class="swiper-button-next">-->
<!--                <i class="fa fa-angle-right"></i>-->
<!--            </div>-->
<!---->
<!--        </div>-->
        <!-- end controls -->

    </div>
    <!-- end swiper -->

    <!-- params -->
    <div class="product__row-gallery-params">
        <!-- list -->
        <ul>
            <li>
                <div>
                    <!-- icon -->
                    <div class="product__row-gallery-params-icon">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/css/images/product-icon-params-weight.png"
                                alt=""
                                title=""
                                class="svg"
                        >
                    </div>
                    <!-- end icon -->
                    <strong>Толщина</strong>
                    <span><?= (int)$product->get_meta( '_custom_thickness_field', true ) ?> мм.</span>
                </div>
            </li>
            <li>
                <div>
                    <!-- icon -->
                    <div class="product__row-gallery-params-icon">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/css/images/product-icon-params-sizes.svg"
                                alt=""
                                title=""
                                class="svg"
                        >
                    </div>
                    <!-- end icon -->
                    <strong>Размеры</strong>
                    <span><?= (!empty($product->get_meta( '_custom_size_field', true ))) ? $product->get_meta( '_custom_size_field', true ) : '0x0' ?> мм</span>
                </div>
            </li>
            <li>
                <div>
                    <!-- icon -->
                    <div class="product__row-gallery-params-icon">
                        <img
                                src="<?= get_template_directory_uri() ?>/assets/css/images/product-icon-params-color.svg"
                                alt=""
                                title=""
                                class="svg"
                        >
                    </div>
                    <!-- end icon -->
                    <?php
                    $color = wc_get_product_terms( $product->get_ID(), 'pa_color', array( 'fields' => 'names' ) );
                    ?>
                    <strong>Цвет</strong>
                    <span><?= ($color[0]) ? $color[0] : 'Не указан' ?></span>
                </div>
            </li>
        </ul>
        <!-- end list -->
    </div>
    <!-- end params -->

</div>
<!-- end gallery -->
