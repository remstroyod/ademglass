<?php
/*
* Navigations
*/
if ( ! defined('ABSPATH')) :
    exit();
endif;
// Register our menu.
register_nav_menus( array(
    'header-menu' 				    => esc_html__( 'Header: Основное меню', 'adem' ),
    'header-menu-bottom' 		    => esc_html__( 'Header: Верхнее меню', 'adem' ),
    'header-menu-catalog' 			=> esc_html__( 'Header: Меню каталога', 'adem' ),
    'footer-menu' 				    => esc_html__( 'Footer: Основное меню', 'adem' ),
    'sidebar-left-menu-one' 		=> esc_html__( 'Левый сайдбар: Основное меню', 'adem' ),
    'sidebar-left-menu-two' 		=> esc_html__( 'Левый сайдбар: Вспомогательное меню', 'adem' ),
));
