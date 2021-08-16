<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package adem
 */
/*
 * Page Headpanel
 */
get_template_part( 'template-parts/partials/partial', 'pagehead' );

if(is_page('kontakty')) :
    /*
     * Page: Contacts
     */
    get_template_part( 'template-parts/pages/page', 'kontakty' );
elseif(is_page('stati')) :
    /*
     * Page: Stati
     */
    get_template_part( 'template-parts/pages/page', 'stati' );
elseif(is_page('delivery')) :
    /*
     * Page: Delivery
     */
    get_template_part( 'template-parts/pages/page', 'delivery' );
elseif(is_page('contacts')) :
    /*
     * Page: Contacts
     */
    get_template_part( 'template-parts/pages/page', 'contacts' );
elseif(is_account_page()) :
    /*
     * Page: Account
     */
    get_template_part( 'template-parts/pages/page', 'account' );
elseif(is_page('wishlist')) :
    /*
     * Page: Wishlist
     */
    get_template_part( 'template-parts/pages/page', 'wishlist' );
elseif(is_page('compare')) :
    /*
     * Page: Compare
     */
    get_template_part( 'template-parts/pages/page', 'compare' );
elseif(is_cart() || is_checkout()) :
    /*
     * Page: Cart
     */
    get_template_part( 'template-parts/pages/page', 'cart' );
else:
    /*
     * Page: Text
     */
    get_template_part( 'template-parts/pages/page', 'text' );
endif;
?>
