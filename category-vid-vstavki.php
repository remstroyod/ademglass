<?php
if ( ! defined('ABSPATH')) :
    exit();
endif;
get_header();
the_post();
get_template_part( 'template-parts/partials/partial', 'pagehead' );