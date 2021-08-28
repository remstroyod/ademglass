<?php
/*
 * Page Head
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
/*
 *
 */
?>
    <!-- headpage -->
    <section class="headpage">
        <!-- container -->
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                    <!-- row -->
                    <div class="headpage__row">
                        <!-- left -->
                        <div class="headpage__row-left">
                            <!-- breadcrumb -->
                            <?= get_template_part( 'template-parts/partials/partial', 'breadcrumbs' ) ?>
                            <!-- end breadcrumb -->
                        </div>
                        <!-- end left -->

<!--                        --><?php //if(is_product_category()) : ?>
<!--                        --><?php
//                            $this_category = get_queried_object();
//                            $args = array(
//                                'taxonomy'      => 'product_cat',
//                                'orderby'       => 'name',
//                                'hierarchical'  => 1,
//                                'hide_empty'    => false,
//                                'parent'        => 0
//                            );
//                            $all_categories = get_categories( $args );
//                            if($all_categories && $this_category->parent == 0) : ?>
<!--                        -->
<!--                                <div class="headpage__row-right">-->
<!---->
<!---->
<!--                                    <div class="catalogmenu-swiper">-->
<!---->
<!--                                        <div class="carousel swiper-container">-->
<!---->
<!--                                            <div class="swiper-wrapper">-->
<!---->
<!--                                                --><?php //foreach ($all_categories as $cat) : ?>
<!--                                                    --><?php //if(!empty(get_field('category-shortname', 'category_'.$cat->term_id))) : ?>
<!--                                            -->
<!--                                                        <a href="--><?//= get_category_link($cat->term_id) ?><!--" class="swiper-slide catalogmenu-swiper-link">-->
<!--                                                            --><?//= get_field('category-shortname', 'category_'.$cat->term_id) ?>
<!--                                                        </a>-->
<!--                                                 -->
<!--                                                    --><?php //endif; ?>
<!--                                                --><?php //endforeach; ?>
<!---->
<!--                                            </div>-->
<!--                                     -->
<!--                                        </div>-->
<!--                                -->
<!---->
<!--                                    </div>-->
<!--                         -->
<!---->
<!--                                </div>-->
<!--                          -->
<!--                            --><?php //endif; ?>
<!--                        --><?php //endif; ?>

                    </div>
                    <!-- end row -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end headpage -->
