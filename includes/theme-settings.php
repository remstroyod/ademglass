<?php
/*
* Theme Settings
*/
if ( ! defined('ABSPATH')) :
	exit();
endif;

/*-- Theme Settings --*/
if ( ! function_exists( 'adem_setup' ) ) :
	function adem_setup() {
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

        remove_image_size( 'thumbnail-100x100' );
        remove_image_size( 'thumbnail-150x150' );
        remove_image_size( 'thumbnail-300x300' );
    }
    adem_setup();
endif;

/*
 * Max Width Wb Block
 */
function titan_custom_admin_css() {
    echo '<style type="text/css">
.wp-block { max-width: 1300px; }
</style>';
}
add_action('admin_head', 'adem_custom_admin_css');
/**
 * REMOVE EMOJI ICONS
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
/*
 * Enable Except Text All Page
 */
add_post_type_support( 'page', array('excerpt') );
/*
 * SVG Upload
 *
 */
add_filter('upload_mimes', 'my_myme_types', 1, 1);
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
/*
 * ACF Google API KEY
 */
function adem_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyCSqQeiH6f0iSnHMZ0-WMAcZKkS3dKjEqQ');
}
add_action('acf/init', 'adem_acf_init');
/*
 * Page 404
 *
*/
function adem_404_template_redirect(){
    if( is_404() && $_SERVER["REQUEST_URI"] != '/404/' || 'draft' == get_post_status() ) {
        wp_redirect( home_url( '/404/' ) );
        exit();
    }
}
add_action( 'template_redirect', 'adem_404_template_redirect' );


/**
 * Filter to change breadcrumb args.
 *
 * @param  array $args Breadcrumb args.
 * @return array $args.
 */
add_filter( 'rank_math/frontend/breadcrumb/args', function( $args ) {

    $args = array(
        'delimiter'   => '',
        'wrap_before' => '<ul class="breadcrumb">',
        'wrap_after'  => '</ul>',
        'before'      => '<li>',
        'after'       => '</li>'
    );
    return $args;
});
/**
 * Filter to change breadcrumb html.
 *
 * @param  html  $html Breadcrumb html.
 * @param  array $crumbs Breadcrumb items
 * @param  class $class Breadcrumb class
 * @return html  $html.
 */
add_filter( 'rank_math/frontend/breadcrumb/html', function( $html, $crumbs, $class ) {
    $html = str_replace('<span class="separator"> - </span>', '', $html);
    return $html;
}, 10, 3);

/**
 * Search
 * @search
 */
function adem_true_rewrite_search_results_permalink() {
    global $wp_rewrite;
    if ( !isset( $wp_rewrite ) || !is_object( $wp_rewrite ) || !$wp_rewrite->using_permalinks() )
        return;
    if ( is_search() && !is_admin() && strpos( $_SERVER['REQUEST_URI'], "/search/") === false && ! empty( $_GET['s'] ) ) {
        wp_redirect( site_url() . "/search/" . urlencode( get_query_var( 's' ) ) );
        exit;
    }elseif (is_search() && empty( get_query_var( 's' ) )){
        wp_redirect( site_url() . "/search/" );
        exit;
    }
}
add_action( 'template_redirect', 'adem_true_rewrite_search_results_permalink' );
/**
 * Search Russian Symbols
 * @search
 */
function adem_true_urldecode_s($query) {
    if (is_search()) {
        $query->query_vars['s'] = urldecode( $query->query_vars['s'] );
    }
    return $query;
}
add_filter('parse_query', 'adem_true_urldecode_s');

/**
 * Search Template Form
 * @search
 */
add_filter( 'get_search_form', 'adem_search_form' );
function adem_search_form( $form ) {
    $form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" class="header-form" >

	        <input
			    type="search"
			    name="s" 
			    id="s" 
			    value="' . get_search_query() . '"
			    placeholder="Поиск товаров"
			    class="header-form__input"
		    >
		    
		    <button 
		            type="submit" 
		            id="searchsubmit" 
		            class="header-form__button header-form__button-submit"
		            >
	</form>';
    return $form;
}


/*
 * Shortcodes Contacts
 */
function adem_shortcodes_contacts( $arr ){
    return get_field('contacts-'.$arr['type'], 'options');
}
add_shortcode('contacts', 'adem_shortcodes_contacts');



/**
 * Contact Form 7
 *
 */
function adem_add_script_wpcf7_footer(){ ?>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {"apiSettings":{"root":"<?= home_url() ?>/wp-json/contact-form-7/v1","namespace":"contact-form-7/v1"},"recaptcha":{"messages":{"empty":"u0411u0443u0434u044c u043bu0430u0441u043au0430, u043fu0456u0434u0442u0432u0435u0440u0434u0456u0442u044c, u0449u043e u0432u0438 u043du0435 u0440u043eu0431u043eu0442."}}};
        /* ]]> */
    </script>
    <script type='text/javascript' src='<?= home_url() ?>/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0'></script>
<?php }
add_action('wp_footer', 'adem_add_script_wpcf7_footer');



























/*
 * ADMIN PANEL: Hide Menu
 */
add_action('admin_menu', 'adem_remove_admin_menu_links', 999);
function adem_remove_admin_menu_links() {
    //global $menu, $submenu;
    //$menu[5][0] = 'Новости и статьи';
    $user = wp_get_current_user();
    //echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
    //echo '<pre>' . print_r( $GLOBALS['submenu'], TRUE) . '</pre>';

    if ( 'remstroy-od@yandex.ru' != $user->user_email ) {
//        remove_menu_page('cptui_main_menu');
//        remove_menu_page('edit.php?post_type=acf-options-page');
//        remove_menu_page('edit.php?post_type=acf-field-group');
//        remove_menu_page('edit.php?post_type=shop_order');
//
//        remove_menu_page('admin.php?page=wc-settings&tab=checkout&section=liqpay-webplus');
//
//        remove_menu_page('wc-admin&path=/analytics/revenue');
//        remove_menu_page('wpcf7');
//
//        remove_menu_page('options-general.php');
//        remove_menu_page('smush');
//        remove_menu_page('aiowpsec');
//        remove_menu_page('yith_plugin_panel');
//        remove_menu_page('plugins.php');
//        remove_menu_page('tinvwl');
//        remove_menu_page('wpfront-user-role-editor-all-roles');
//
//        remove_submenu_page('woocommerce', 'checkout_form_designer');
//        remove_submenu_page('woocommerce', 'wt-woocommerce-related-products');
//
//        remove_submenu_page('users.php', 'wpfront-user-role-editor-assign-roles');
//        remove_submenu_page('edit.php?post_type=product', 'wt-woocommerce-related-products');

    }
}
/**
 * Отключаем принудительную проверку новых версий WP, плагинов и темы в админке,
 * чтобы она не тормозила, когда долго не заходил и зашел...
 * Все проверки будут происходить незаметно через крон или при заходе на страницу: "Консоль > Обновления".

 */
if( is_admin() ){
    remove_action( 'admin_init', '_maybe_update_core' );
    remove_action( 'admin_init', '_maybe_update_plugins' );
    remove_action( 'admin_init', '_maybe_update_themes' );
    remove_action( 'load-plugins.php', 'wp_update_plugins' );
    remove_action( 'load-themes.php', 'wp_update_themes' );
    /**
     * отключим проверку необходимости обновить браузер в консоли - мы всегда юзаем топовые браузеры!
     * эта проверка происходит раз в неделю...
     */
    add_filter( 'pre_site_transient_browser_'. md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_true' );
}





