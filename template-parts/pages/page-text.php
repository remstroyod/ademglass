<?php 
/*
 * Page: Text
 */
if ( ! defined('ABSPATH')) :
	exit();
endif;
?>
<!-- sidebar -->
<section class="sidebar">
    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                <!-- row -->
                <div class="sidebar__row">

                    <!-- left -->
                    <div class="sidebar__row-left">

                        <!-- Menu -->
                        <div class="sidebar__menu">
                            <?= get_template_part( 'template-parts/partials/partial', 'leftmenu-one' ); ?>
                            <?= get_template_part( 'template-parts/partials/partial', 'leftmenu-two' ); ?>
                        </div>
                        <!-- End Menu -->

                        <!-- news last -->
                        <div class="sidebar__row-left-footer">
                            <?= get_template_part( 'template-parts/partials/partial', 'news-last' ) ?>
                        </div>
                        <!-- end news last -->

                    </div>
                    <!-- end left -->


                    <!-- right -->
                    <div class="sidebar__row-right">

                        <?= get_template_part('template-parts/partials/partial', 'titlepage'); ?>

                        <!-- pagetext -->
                        <div class="pagetext text__style">
                            <?= the_content() ?>
                        </div>
                        <!-- end pagetext -->

                    </div>
                    <!-- end right -->

                </div>
                <!-- end row -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end sidebar -->
