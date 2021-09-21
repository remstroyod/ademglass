<?php
/*
 * Form
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
/**
 * Fancybox: Fast Order
 * @lostpassword
 */
add_action('wp_ajax_adem_form_fancybox_fastorder', 'adem_form_fancybox_fastorder_func');
add_action('wp_ajax_nopriv_adem_form_fancybox_fastorder', 'adem_form_fancybox_fastorder_func');
/**
 * Function:
 * @registration
 */
function adem_form_fancybox_fastorder_func(){
    $title = $_POST['title'];
    $page_url = $_POST['page_url'];
    ob_start();
    get_template_part(
            'template-parts/partials/fancybox/form-fastorder',
            '',
            [
                    'title'     => $title,
                    'page_url'  => $page_url,
            ]

    );
    wp_die();
}
