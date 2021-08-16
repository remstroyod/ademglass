<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

    <!-- Nav tabs -->
    <ul class="tabproduct" role="tablist">
        <?php $i=1; foreach ( $product_tabs as $key => $product_tab ) : ?>
            <li role="presentation" class="<?= ($i == 1) ? 'active' : '' ?>">
                <a href="#tab-<?php echo esc_attr( $key ); ?>" aria-controls="tab-<?php echo esc_attr( $key ); ?>" role="tab" data-toggle="tab">
                    <span><?= $product_tab['title'] ?></span>
                </a>
            </li>
            <?php $i++; endforeach; ?>
    </ul>
    <!-- End Nav tabs -->

    <!-- Tab panes -->
    <div class="tab-content tabproduct-content">
        <?php $i=1; foreach ( $product_tabs as $key => $product_tab ) : ?>
            <div role="tabpanel" class="tab-pane fade <?= ($i == 1) ? 'in active' : '' ?>" id="tab-<?php echo esc_attr( $key ); ?>">
                <?php
                if ( isset( $product_tab['callback'] ) ) {
                    call_user_func( $product_tab['callback'], $key, $product_tab );
                }
                ?>
            </div>
            <?php $i++; endforeach; ?>
    </div>
    <!-- End Tab panes -->
    <?php do_action( 'woocommerce_product_after_tabs' ); ?>

<?php endif; ?>
