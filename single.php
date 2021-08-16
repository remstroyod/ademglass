<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package adem
 */

get_header();

while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content', get_post_type() );
endwhile;

get_footer();
