<?php
/*
Template Name: Решения под проекты
Template Post Type: page
*/

get_header();
?>

<?php
/*
 * Page Headpanel
 */
get_template_part( 'template-parts/partials/partial', 'pagehead' );

get_template_part( 'template-parts/pages/home/home', 'decisions' );

get_footer();
