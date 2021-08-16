<?php
defined( 'ABSPATH' ) || exit;
/**
 * Class Walker_Category_Zap
 */
class Walker_Category_Zap extends Walker_Category {

    /**
     * @param $output
     * @param $category
     * @param int $depth
     * @param array $args
     * @param int $id
     */
    function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {

        extract($args);

        $cat_name = esc_attr( $category->name );
        $cat_name = apply_filters( 'list_cats', $cat_name, $category );
        $link = '<a href="?zap_cat=' . $category->term_id . '" ';
        $link .= '>';
        $link .= $cat_name . '</a>';

        if ( 'list' == $args['style'] ) {
            $output .= "\t<li";
            $output .= ">$link\n";
        } else {
            $output .= "\t$link<br />\n";
        }
    }
}
/**
 * Add Rule Zap
 * @parse_request
 */
add_action( 'parse_request', function( $wp ){

    if ( preg_match( '#^zap#', $wp->request, $matches ) ) {

        if( array_key_exists('zap_cat', $_GET) ) :

            header('Content-Type: application/xml; charset=utf-8');

            $args = [
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'tax_query'      => [
                    [
                        'taxonomy'   => 'product_cat',
                        'field'      => 'term_id',
                        'terms'      => array( $_GET['zap_cat'] ),
                    ]
                ]
            ];

            $loop = new WP_Query( $args );

            echo '<STORE URL="' . home_url() . '" DATE="' . date('d/m/Y', time()) . '" TIME="' . date('h:i:s', time()) . '">';

            if( $loop->have_posts() ) :

                echo '<PRODUCTS>';
                while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;

                    /**
                     * Cost
                     */
                    $shipping_class_id = $product->get_shipping_class_id();
                    $shipping_class= $product->get_shipping_class();
                    $fee = 0;
                    if ($shipping_class_id) {
                        $flat_rates = get_option("woocommerce_flat_rates");
                        $fee = $flat_rates[$shipping_class]['cost'];
                    }
                    $flat_rate_settings = get_option("woocommerce_flat_rate_settings");

                    echo '<PRODUCT NUM="' . $product->get_id() . '">';
                    echo '<PRODUCT_URL>' . get_permalink( $product->get_id() ) . '</PRODUCT_URL>';
                    echo '<PRODUCT_NAME>' . $product->get_title() . '</PRODUCT_NAME>';
                    if( $product->get_sku() ) echo '<MODEL>' . $product->get_sku() . '</MODEL>';
                    echo '<DETAILS>' . wp_strip_all_tags( $product->get_description() ) . '</DETAILS>';
                    if( $product->get_sku() ) echo '<CATALOG_NUMBER>' . $product->get_sku() . '</CATALOG_NUMBER>';
                    echo '<PRODUCTCODE>' . $product->get_id() . '</PRODUCTCODE>';
                    echo '<CURRENCY>' . get_woocommerce_currency() . '</CURRENCY>';
                    echo '<PRICE>' . $product->get_regular_price() . '</PRICE>';
                    echo '<SHIPMENT_COST>' . ($flat_rate_settings['cost_per_order'] + $fee) . '</SHIPMENT_COST>';
                    echo '<DELIVERY_TIME></DELIVERY_TIME>';
                    echo '<MANUFACTURER></MANUFACTURER>';
                    echo '<WARRANTY></WARRANTY>';
                    echo '<IMAGE>' . wp_get_attachment_image_url( $product->get_image_id(), 'full' ) . '</IMAGE>';
                    echo '<TAX>1</TAX>';

                    echo '</PRODUCT>';

                endwhile;
                echo '</PRODUCTS>';

                wp_reset_query();

            endif;


            echo '</STORE>';

        else:

            $args = array(
                'show_option_all'    => '',
                'show_option_none'   => __('No categories'),
                'orderby'            => 'name',
                'order'              => 'ASC',
                'style'              => 'list',
                'show_count'         => 0,
                'hide_empty'         => 1,
                'use_desc_for_title' => 1,
                'child_of'           => 0,
                'feed'               => '',
                'feed_type'          => '',
                'feed_image'         => '',
                'exclude'            => '',
                'exclude_tree'       => '',
                'include'            => '',
                'hierarchical'       => true,
                'title_li'           => '',
                'number'             => NULL,
                'echo'               => true,
                'depth'              => 0,
                'current_category'   => 0,
                'pad_counts'         => 0,
                'taxonomy'           => 'product_cat',
                'walker'             => new Walker_Category_Zap(),
                'hide_title_if_empty' => false,
                'separator'          => '<br />',
            );

            echo '<ul>';
            wp_list_categories( $args );
            echo '</ul>';

        endif;

        exit;
    }
});