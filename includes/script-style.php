<?php
/*
* Js and Css
*/
if ( ! defined('ABSPATH')) :
	exit();
endif;
/**
 * Register jQuery
 */
add_action( 'wp_enqueue_scripts', 'jquery_script_method' );
function jquery_script_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/src/jquery/jquery.js', false, '3.4.1', false );
	wp_enqueue_script( 'jquery' );
}
/**
 * CSS files
 */
add_action( 'wp_enqueue_scripts', 'adem_styles' );
function adem_styles() {
    wp_enqueue_style( 'style-adem', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1.0' );
    wp_enqueue_style( 'customize-adem', get_template_directory_uri() . '/assets/css/customize.css', array(), '1.0.2' );
}
/**
 * JS files
 */
add_action( 'wp_enqueue_scripts', 'adem_scripts' );
function adem_scripts() {
    wp_enqueue_script( 'bundle-adem', get_template_directory_uri() . '/assets/js/bundle.js', 'jquery', '1.0.1', true );
    wp_enqueue_script( 'script-adem', get_template_directory_uri() . '/assets/js/src/script.js', 'jquery', '1.0.1', true );
    wp_enqueue_script( 'form-adem', get_template_directory_uri() . '/assets/js/src/form.js', 'jquery', '1.0.1', true );
}

/*
 * Remove CSS
 */
function adem_dequeue_style() {
	/*
     * Css: Woocommerce
     */
	wp_dequeue_style( 'woocommerce_frontend_styles' );
	wp_dequeue_style( 'woocommerce_fancybox_styles' );
	wp_dequeue_style( 'woocommerce_chosen_styles' );
	wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
	wp_dequeue_style( 'wc-block-style' );
	wp_dequeue_style( 'woocommerce-inline' );
    wp_dequeue_style( 'woocommerce-layout' );
    wp_dequeue_style( 'woocommerce-smallscreen' );
    wp_dequeue_style( 'woocommerce-general' );
	/*
	 * Css: Ajax Filter
	 */
	wp_dequeue_style( 'berocket_aapf_widget-style' );
	wp_dequeue_style( 'berocket_aapf_widget-themer-style' );
	wp_dequeue_style( 'berocket_aapf_widget-scroll' );
	wp_dequeue_style( 'jquery-ui-datepick' );
    wp_dequeue_style( 'font-awesome' );

    wp_dequeue_style( 'berocket_lmp_style' );



    /*
     * Otcher
     */
    wp_dequeue_style( 'jquery-selectBox' );
    wp_dequeue_style( 'yith-wcwl-font-awesome' );
    wp_dequeue_style( 'yith-wcwl-main' );
    wp_dequeue_style( 'mfcf7_zl_button_style' );
    /*
     * Contact Form
     */
    wp_dequeue_style( 'contact-form-7' );
	/*
	 * JS
	 */
	wp_dequeue_script( 'wc_price_slider' );
	wp_dequeue_script( 'wc-chosen' );
	wp_dequeue_script( 'prettyPhoto' );
	wp_dequeue_script( 'prettyPhoto-init' );
	wp_dequeue_script( 'jquery-blockui' );
	wp_dequeue_script( 'jquery-placeholder' );
	wp_dequeue_script( 'fancybox' );
	wp_dequeue_script( 'jqueryui' );
	wp_dequeue_script( 'flexslider' );
	wp_dequeue_script( 'zoom' );
	wp_dequeue_script( 'photoswipe' );


    wp_dequeue_style( 'dashicons' );
    wp_dequeue_style( 'tawcvs-frontend' );
    wp_dequeue_style( 'dashicons' );









}
add_action( 'wp_enqueue_scripts', 'adem_dequeue_style' );
