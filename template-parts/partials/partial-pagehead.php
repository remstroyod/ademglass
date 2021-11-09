<?php
/*
 * Page Head
 */
defined( 'ABSPATH' ) || exit;
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

                            <?php if( is_search() ) : ?>

                                <!-- breadcrumb -->
                                <ul class="breadcrumb">
                                    <li>
                                        <a href="<?= home_url() ?>"><?= __( 'Главная', 'adem' ) ?></a>
                                    </li>
                                    <li>
                                        <span class="last"><?= __( 'Поиск', 'adem' ) ?></span>
                                    </li>
                                </ul>
                                <!-- end breadcrumb -->

                            <?php else: ?>

                                <!-- breadcrumb -->
                                <?= get_template_part( 'template-parts/partials/partial', 'breadcrumbs' ) ?>
                                <!-- end breadcrumb -->

                            <?php endif; ?>
                        </div>
                        <!-- end left -->

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
