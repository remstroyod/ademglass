<?php
/*
 * Left Menu: One
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
?>
<?= get_template_part( 'template-parts/partials/partial', 'sidebar-left-title' ) ?>
<!-- List -->
<?php
/*
 * Args Nav Menu
 */
$args = array(
    'theme_location'    => 'sidebar-left-menu-one',
    'container'         => '',
    'container_class'   => '',
    'menu_class'        => '',
    'items_wrap'        => '<ul class="sidebar__menu-list">%3$s</ul>'
);
wp_nav_menu($args);
?>
<!-- End List -->
