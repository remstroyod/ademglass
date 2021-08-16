<?php
/*
 * Download
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;

?>

<!-- download -->
<section class="download">
    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-24 col-md-24 col-lg-24">

                <!-- inner -->
                <div class="download__inner">

                    <!-- title -->
                    <h5 class="download__inner-title">
                        <?= get_field( 'settings-download-title', 'options' ) ?>
                    </h5>
                    <!-- end title -->

                    <!-- btn group -->
                    <div class="download__inner-btn">
                        <a href="<?= get_the_permalink(51) ?>" class="btn btn-opacity">
                            <!-- icon -->
                            <div>
                                <img
                                        src="<?= get_template_directory_uri() ?>/assets/css/images/download-catalog-icon-view.svg"
                                        alt="Посмотреть цены"
                                        title="Посмотреть цены"
                                        class="svg"
                                >
                            </div>
                            <!-- end icon -->
                            <span>Посмотреть цены</span>
                        </a>
                        <a href="<?= get_field( 'settings-download-file', 'options' ) ?>" class="btn" target="_blank">
                            <!-- icon -->
                            <div>
                                <img
                                        src="<?= get_template_directory_uri() ?>/assets/css/images/download-catalog-icon-download.svg"
                                        alt="Скачать каталог"
                                        title="Скачать каталог"
                                        class="svg"
                                >
                            </div>
                            <!-- end icon -->
                            <span>Скачать каталог</span>
                        </a>
                    </div>
                    <!-- end btn group -->

                    <img
                            src="<?= get_field( 'settings-download-image', 'options' ) ?>"
                            alt="Скачать каталог"
                            title="Скачать каталог"
                            class="img-responsive"
                    >


                </div>
                <!-- end inner -->

            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end download -->

