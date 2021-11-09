<?php
defined( 'ABSPATH' ) || exit;

/**
 * Add Tab Calc
 * @add_filter
 * @woocommerce_product_data_tabs
 */
add_filter( 'woocommerce_product_data_tabs', function ($tabs) {

    $tabs['panel_calc'] = array(
        'label'    => __( 'Калькулятор' ),
        'target'   => 'panel_calc_data',
        'class'    => [ 'hide_if_grouped', 'panel_calc' ],
        'priority' => 100,
    );

    return $tabs;

}, 10, 1 );

/**
 * Add Tab Calc Edit Panel Content
 * @add_action
 * @woocommerce_product_data_panels
 */
add_action( 'woocommerce_product_data_panels', function () {

    global $post;
    $screen = get_current_screen();
    $_product = wc_get_product( $post->ID );


    ?>
    <div id="panel_calc_data" class="panel woocommerce_options_panel hidden" data-product="<?= $post->ID ?>">

        <div class="options_group">
            <?php
            $active = get_post_meta( $post->ID, 'is_calc', true );
            if( empty( $active ) ) $active = '';

            woocommerce_wp_checkbox(array(
                'id'            => 'is_calc',
                'label'         => __('Включить в калькулятор?', 'woocommerce' ),
                'description'   => '',
                'value'         => $active,
            ));
            ?>
        </div>

        <div class="options_group">
            <?php
            woocommerce_wp_select( array(
                'id'            => '_calc_category',
                'label'         => __( 'Выберите раздел', 'woocommerce' ),
                'description'   => '',
                'desc_tip'      => false,
                'style'         => '',
                'value'         => get_post_meta( $post->ID, '_calc_category', true ),
                'options'       => [
                    ''          => __('Выберите...', 'woocommerce'),
                    '0'         => __('Зеркало', 'woocommerce'),
                    '1'         => __('Стекло', 'woocommerce'),
                    '2'         => __('Рифленое стекло', 'woocommerce'),
                    '3'         => __('Лакобель', 'woocommerce'),
                    '4'         => __('Тонированное стекло', 'woocommerce'),
                ]
            ) );
            ?>
        </div>

        <div class="options_group">
            <?php
            woocommerce_wp_text_input(
                array(
                    'id'        => '_calc_price',
                    'value'     => get_post_meta( $post->ID, '_calc_price', true ),
                    'label'     => __( 'Цена калькулятора', 'woocommerce' ) . ' (' . get_woocommerce_currency_symbol() . ')',
                    'data_type' => 'price',
                    'desc_tip'  => true,
                    'description' => __( 'Эта цена предназначена только для калькулятора', 'woocommerce' ),
                )
            );
            woocommerce_wp_text_input(
                array(
                    'id'        => '_calc_price_polirovka',
                    'value'     => get_post_meta( $post->ID, '_calc_price_polirovka', true ),
                    'label'     => __( 'Цена полировки', 'woocommerce' ) . ' (' . get_woocommerce_currency_symbol() . ')',
                    'data_type' => 'price',
                    'desc_tip'  => true,
                    'description' => __( 'Эта цена за полировку', 'woocommerce' ),
                )
            );
            woocommerce_wp_text_input(
                array(
                    'id'        => '_calc_price_shlifovka',
                    'value'     => get_post_meta( $post->ID, '_calc_price_shlifovka', true ),
                    'label'     => __( 'Цена шлифовки', 'woocommerce' ) . ' (' . get_woocommerce_currency_symbol() . ')',
                    'data_type' => 'price',
                    'desc_tip'  => true,
                    'description' => __( 'Эта цена за шлифовку', 'woocommerce' ),
                )
            );

            woocommerce_wp_text_input(
                array(
                    'id'        => '_calc_price_5_12',
                    'value'     => get_post_meta( $post->ID, '_calc_price_5_12', true ),
                    'label'     => __( 'Цена: 5-12', 'woocommerce' ) . ' (' . get_woocommerce_currency_symbol() . ')',
                    'data_type' => 'price',
                    'desc_tip'  => true,
                    'description' => __( 'Диаметр отверстия 5-12', 'woocommerce' ),
                )
            );
            woocommerce_wp_text_input(
                array(
                    'id'        => '_calc_price_13_30',
                    'value'     => get_post_meta( $post->ID, '_calc_price_13_30', true ),
                    'label'     => __( 'Цена: 13-30', 'woocommerce' ) . ' (' . get_woocommerce_currency_symbol() . ')',
                    'data_type' => 'price',
                    'desc_tip'  => true,
                    'description' => __( 'Диаметр отверстия 13-30', 'woocommerce' ),
                )
            );
            woocommerce_wp_text_input(
                array(
                    'id'        => '_calc_price_31_100',
                    'value'     => get_post_meta( $post->ID, '_calc_price_31_100', true ),
                    'label'     => __( 'Цена: 31-100', 'woocommerce' ) . ' (' . get_woocommerce_currency_symbol() . ')',
                    'data_type' => 'price',
                    'desc_tip'  => true,
                    'description' => __( 'Диаметр отверстия 31-100', 'woocommerce' ),
                )
            );
            ?>
        </div>

    </div>
    <?php

}, 10 );

/**
 * Save Fields
 * @add_action
 * @woocommerce_process_product_meta
 */
add_action( 'woocommerce_process_product_meta', function ($post_id) {

    global $post;

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) :
        return $post_id;
    endif;

    if ( 'product' !== $post->post_type ) return $post_id;

    if (isset($_REQUEST['is_calc'])) :
        update_post_meta( $post_id, 'is_calc', $_REQUEST['is_calc'] );
    else:
        delete_post_meta( $post_id, 'is_calc' );
    endif;

    //print_r($_REQUEST);exit();

    if( is_null($_REQUEST['_calc_category']) ) :
        delete_post_meta( $post_id, '_calc_category' );
    else:
        update_post_meta( $post_id, '_calc_category', $_REQUEST['_calc_category'] );
    endif;

    if( ! empty( $_REQUEST['_calc_price'] ) ) :
        update_post_meta( $post_id, '_calc_price', $_REQUEST['_calc_price'] );
    else:
        delete_post_meta( $post_id, '_calc_price' );
    endif;

    if( ! empty( $_REQUEST['_calc_price_polirovka'] ) ) :
        update_post_meta( $post_id, '_calc_price_polirovka', $_REQUEST['_calc_price_polirovka'] );
    else:
        delete_post_meta( $post_id, '_calc_price_polirovka' );
    endif;

    if( ! empty( $_REQUEST['_calc_price_shlifovka'] ) ) :
        update_post_meta( $post_id, '_calc_price_shlifovka', $_REQUEST['_calc_price_shlifovka'] );
    else:
        delete_post_meta( $post_id, '_calc_price_shlifovka' );
    endif;

    if( ! empty( $_REQUEST['_calc_price_5_12'] ) ) :
        update_post_meta( $post_id, '_calc_price_5_12', $_REQUEST['_calc_price_5_12'] );
    else:
        delete_post_meta( $post_id, '_calc_price_5_12' );
    endif;

    if( ! empty( $_REQUEST['_calc_price_13_30'] ) ) :
        update_post_meta( $post_id, '_calc_price_13_30', $_REQUEST['_calc_price_13_30'] );
    else:
        delete_post_meta( $post_id, '_calc_price_13_30' );
    endif;

    if( ! empty( $_REQUEST['_calc_price_31_100'] ) ) :
        update_post_meta( $post_id, '_calc_price_31_100', $_REQUEST['_calc_price_31_100'] );
    else:
        delete_post_meta( $post_id, '_calc_price_31_100' );
    endif;

}, 99 );
