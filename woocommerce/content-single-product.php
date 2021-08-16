<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>">

    <!-- row -->
    <div class="product__row product__row-start">
        <!-- left -->
        <div class="product__row-left">
        <?php
        /**
         * Hook: woocommerce_before_single_product_summary.
         *
         * @hooked woocommerce_show_product_sale_flash - 10
         * @hooked woocommerce_show_product_images - 20
         */
        do_action( 'woocommerce_before_single_product_summary' );
        ?>
        </div>
        <!-- end left -->
        <!-- right -->
        <div class="product__row-right">
            <!-- detail -->
            <div class="product__row-detail">
                <!-- header -->
                <div class="product__row-detail-header">
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    do_action( 'woocommerce_single_product_summary' );
                    ?>
                </div>
                <!-- end header -->
                <!-- footer -->
                <div class="product__row-detail-footer">

                    <!-- getorder -->
                    <div class="product__row-getorder">

                        <!-- title -->
                        <small>Запросите точный расчет вашего заказа у менеджера</small>
                        <!-- end title -->

                        <!-- minirow -->
                        <div class="product__minirow">
                            <!-- left -->
                            <div class="product__minirow-left">

                                <a href="tel:<?= phone_replace(do_shortcode('[contacts type="tel"]')) ?>" class="product__row-getorder-phone">
                                    <img
                                            src="<?= get_template_directory_uri() ?>/assets/css/images/icon-phone.svg"
                                            alt=""
                                            title=""
                                            class="svg"
                                    >
                                    <span><?= do_shortcode('[contacts type="tel"]') ?></span>
                                </a>

                            </div>
                            <!-- end left -->
                            <!-- right -->
                            <div class="product__minirow-right">

                                <a href="#fancyFastOrder" class="btn fancyFastOrder" data-title="<?= $product->get_title() ?>">
                                    <span>Рассчитать заказ</span>
                                </a>

                            </div>
                            <!-- end right -->
                        </div>
                        <!-- end minirow -->

                    </div>
                    <!-- end getorder -->

                </div>
                <!-- end footer -->
            </div>
            <!-- end detail -->
        </div>
        <!-- end right -->

    </div>
    <!-- end row -->

    <!-- row -->
    <div class="product__row">
        <!-- left -->
        <div class="product__row-left">

            <!-- devants -->
            <div class="product__devants">

                <?php
                $product_advantages = get_field('settings-product-advantages', 'options');
                if(!$product_advantages['settings-product-advantages-hide']) :
                ?>
                <!-- left -->
                <div class="product__devants-left">

                    <!-- advantages -->
                    <div class="product__advantages">
                        <?php if($product_advantages['settings-product-advantages-list']) : ?>
                        <!-- list -->
                        <ul>
                        <?php foreach ($product_advantages['settings-product-advantages-list'] as $advant) : ?>
                            <li>
                                <!-- center -->
                                <div>
                                    <!-- icon -->
                                    <div class="product__advantages-icon">
                                        <img
                                                src="<?= $advant['settings-product-advantages-list-icon'] ?>"
                                                alt="<?= $advant['settings-product-advantages-list-title'] ?>"
                                                title="<?= $advant['settings-product-advantages-list-title'] ?>"
                                                class="svg"
                                        >
                                    </div>
                                    <!-- end icon -->
                                    <!-- text -->
                                    <div class="product__advantages-text">
                                        <p><?= $advant['settings-product-advantages-list-title'] ?></p>
                                    </div>
                                    <!-- end text -->
                                </div>
                                <!-- end center -->
                            </li>
                        <?php endforeach; ?>
                        </ul>
                        <!-- end list -->
                        <?php endif; ?>
                    </div>
                    <!-- end advantages -->

                </div>
                <!-- end left -->
                <?php endif; ?>

                <?php
                $product_type = get_field('settings-product-type', 'options');
                if(!$product_type['settings-product-type-hide']) :
                ?>
                <!-- right -->
                <div class="product__devants-right">

                    <?php if($product_type['settings-product-type-list']) : ?>
                    <h6><?= _e( 'Изготовим изделия под проекты', 'adem' ) ?></h6>
                    <!-- list -->
                    <ul class="product__listing row">
                        <?php foreach ($product_type['settings-product-type-list'] as $type) : ?>
                        <li>
                            <!-- image -->
                            <div class="product__listing-image">
                                <img
                                        src="<?= kama_thumb_src('w=300 &h=250 &crop=false &attach_id='.$type['settings-product-type-list-icon']) ?>"
                                        alt="<?= $type['settings-product-type-list-title'] ?>"
                                        title="<?= $type['settings-product-type-list-title'] ?>"
                                        class="img-responsive"
                                >
                            </div>
                            <!-- end image -->
                            <span><?= $type['settings-product-type-list-title'] ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <!-- end list -->
                    <?php endif; ?>

                </div>
                <!-- end right -->
                <?php endif; ?>

            </div>
            <!-- end devants -->

        </div>
        <!-- end left -->
        <!-- right -->
        <div class="product__row-right">
            <?php
            /**
             * Hook: woocommerce_after_single_product_summary.
             *
             * @hooked woocommerce_output_product_data_tabs - 10
             * @hooked woocommerce_upsell_display - 15
             * @hooked woocommerce_output_related_products - 20
             */
            do_action( 'woocommerce_after_single_product_summary' );
            ?>
        </div>
        <!-- end right -->
    </div>
    <!-- end row -->
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
