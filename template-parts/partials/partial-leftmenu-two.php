<?php
/*
 * Left Menu: Two
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
?>
<!-- List -->
<?php
/*
 * Args Nav Menu
 */
$args = array(
    'theme_location'    => 'sidebar-left-menu-two',
    'container'         => '',
    'container_class'   => '',
    'menu_class'        => '',
    'items_wrap'        => '<ul class="sidebar__menu-list __last">%3$s</ul>'
);
wp_nav_menu($args);
?>
<!-- End List -->
