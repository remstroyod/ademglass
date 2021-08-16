<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package adem
 */
function adem_woocommerce_setup() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'adem_woocommerce_setup' );

/*
 * RUB
 */
add_filter('woocommerce_currency_symbol', 'kabare_add_my_currency_symbol', 10, 2);
function kabare_add_my_currency_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
        case 'RUB': $currency_symbol = 'руб'; break;
    }
    return $currency_symbol;
}

/**
 * Add New Fields to Product
 */
add_action( 'woocommerce_product_options_pricing', 'adem_woo_add_custom_fields' );
function adem_woo_add_custom_fields() {
    global $product, $post;
    echo '<div class="options_group">';// Группировка полей
    // цифровое поле
    woocommerce_wp_text_input( array(
        'id'                => '_custom_thickness_field',
        'label'             => __( 'Толщина (мм)', 'woocommerce' ),
        'placeholder'       => 'Толщина',
        'desc_tip'          => 'true',
        'description'       => __( 'Вводятся только числа', 'woocommerce' ),
        'type'              => 'number',
        'custom_attributes' => array(
            'step' => 'any',
            'min'  => '0',
        ),
    ) );
    // текстовое поле
    woocommerce_wp_text_input( array(
        'id'                => '_custom_size_field',
        'label'             => __( 'Размеры (мм)', 'woocommerce' ),
        'placeholder'       => 'Размеры',
        'desc_tip'          => 'true',
        'custom_attributes' => array( 'required' => 'required' ),
        'description'       => __( 'Введите толщину', 'woocommerce' ),
    ) );
    echo '</div>';
}

add_action( 'woocommerce_process_product_meta', 'adem_woo_custom_fields_save', 10 );
function adem_woo_custom_fields_save( $post_id ) {

    // Вызываем объект класса
    $product = wc_get_product( $post_id );

    // Сохранение текстового поля
    $text_field = isset( $_POST['_custom_size_field'] ) ? sanitize_text_field( $_POST['_custom_size_field'] ) : '';
    $product->update_meta_data( '_custom_size_field', $text_field );

    // Сохранение цифрового поля
    $number_field = isset( $_POST['_custom_thickness_field'] ) ? sanitize_text_field( $_POST['_custom_thickness_field'] ) : '';
    $product->update_meta_data( '_custom_thickness_field', $number_field );

    // Сохраняем все значения
    $product->save();

}

/**
 * Remove hook
 * Loop Product
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
/**
 * Loop: Link Open
 */
add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
function woocommerce_template_loop_product_link_open() {
    global $product;
    $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
    echo '<a href="' . esc_url( $link ) . '" class="catalog__list-card">';
}

/**
 * Loop: Thumbnail
 */
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
function woocommerce_template_loop_product_thumbnail() {
    global $product;
    ?>
    <!-- image -->
    <div class="catalog__list-card-image">
        <img
            src="<?= kama_thumb_src('h=400 &w=400 &attach_id='.get_post_thumbnail_id($product->get_id())) ?>"
            alt="<?= $product->get_title() ?>"
            title="<?= $product->get_title() ?>"
            class="img-responsive"
        >
    </div>
    <!-- end image -->
    <?php
}

/**
 * Loop: Title
 */
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
function woocommerce_template_loop_product_title() {
    ?>
    <!-- title -->
    <div class="catalog__list-card-title dotdotdot">
        <span>
            <?= get_the_title() ?>
        </span>
    </div>
    <!-- end title -->
    <?php
}



/**
 * Remove hook
 * Single Product
 */
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action('woocommerce_after_single_product', 'woocommerce_output_related_products', 20);

/**
 * Single Product
 * @hooked woocommerce_product_tabs
 */
add_filter( 'woocommerce_product_tabs', 'adem_woo_rename_single_product_tab', 98);
function adem_woo_rename_single_product_tab($tabs) {
    global $product;
    $tabs['description']['title'] = __( 'Описание' );
    unset($tabs['additional_information']);
    return $tabs;
}
/**
 * Single Product
 * @hooked woocommerce_product_tabs
 */
add_filter( 'woocommerce_product_tabs', 'adem_woo_new_product_tab_delivery' );
function adem_woo_new_product_tab_delivery( $tabs ) {
    global $product;
    $tabs['complect'] = array(
        'title' 	=> __( 'Доставка', 'woocommerce' ),
        'priority' 	=> 20,
        'callback' 	=> 'adem_woo_new_product_tab_content_delivery'
    );
    return $tabs;
}
/**
 * Single Product
 * @hooked woocommerce_product_tabs
 */
function adem_woo_new_product_tab_content_delivery() {
    // The new tab content
    global $product;
    wc_get_template(
        'single-product/tabs/delivery.php',
        array(
            'id'        => $product->get_id()
        )
    );
}
