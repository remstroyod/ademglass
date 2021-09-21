<?php
/*
 * Page: Search
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;

get_template_part( 'template-parts/partials/partial', 'pagehead' );
?>
<!-- sidebar -->
<section class="sidebar">
    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                <h1>
                    <?= _e( 'Результаты поиска:', 'adem' ) ?> <?= get_query_var( 's' ) ?>
                </h1>

                <div>
                    <?php
                    $args = array(
                        'post_type'      => 'product',
                        's'             => get_query_var( 's' )
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) :
                        woocommerce_product_loop_start();
                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                            wc_get_template_part( 'content', 'product' );
                        endwhile;
                        woocommerce_product_loop_end();
                        wp_reset_postdata();
                    else:
                        echo '<div class="searchpage__content-empty"><p>'. __( 'По вашему запросу', 'adem' ) .' <strong>«'.get_query_var( 's' ).'»</strong> '. __( 'ничего не найдено', 'adem' ) .'.</p></div>';
                    endif;
                    ?>
                </div>

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end sidebar -->
