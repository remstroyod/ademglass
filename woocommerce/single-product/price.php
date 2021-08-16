<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<!-- minirow -->
<div class="product__minirow">
    <!-- left -->
    <div class="product__minirow-left">

        <!-- price -->
        <div class="product__row-price">
            <small>Базовая стоимость</small>
            <div>
                <?php if($product->get_regular_price()) : ?>
                <span><?= (number_format($product->get_regular_price(), 0, '.', ' ')) ?></span>
                <p>
                    <sup>от</sup>
                    <sub><?= get_woocommerce_currency_symbol( 'RUB' ) ?></sub>
                </p>
                <?php else: ?>
                    <div class="product__row-info"><p>Уточняйте по телефону</p></div>
                <?php endif; ?>
            </div>
        </div>
        <!-- end price -->

    </div>
    <!-- end left -->
    <!-- right -->
    <div class="product__minirow-right">

        <!-- info -->
        <div class="product__row-info">
            <small><i class="fa fa-info-circle"></i> Информация</small>
            <p>Цены указаны для юридических лиц. Цену в нарезку и для физических лиц уточняйте у менеджера</p>
        </div>
        <!-- end info -->

    </div>
    <!-- end right -->
</div>
<!-- end minirow -->
