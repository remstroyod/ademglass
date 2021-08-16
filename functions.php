<?php
/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';
/**
 * Settings Theme.
 */
require get_template_directory() . '/includes/theme-settings.php';
/**
 * Widgets
 */
require get_template_directory() . '/includes/widget-areas.php';
/**
 * Js and Css.
 */
require get_template_directory() . '/includes/script-style.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';
/**
 * Navigations.
 */
require get_template_directory() . '/includes/navigations.php';
/**
 * Helpers functions.
 */
require get_template_directory() . '/includes/helpers.php';
/**
 * Implement the Custom Footer feature.
 */
require get_template_directory() . '/includes/custom-footer.php';
/**
 * Form
 */
require get_template_directory() . '/includes/form.php';
/*
 * Woocommerce
 */
/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
    require get_template_directory() . '/includes/woocommerce-settings.php';
}

require get_template_directory() . '/includes/_zap.php';
