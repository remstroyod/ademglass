<?php
/*
 * Home: Decisions
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;

global $post;
$tmp_post = $post;
$posts = get_posts( array(
    'numberposts' => 7,
    'category'    => 141,
    'post_type'   => 'post'
) );

if($posts) :
?>

<!-- decisions -->
<section class="decisions">
    <!-- container -->
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-xs-24 col-sm-14 col-md-9 col-lg-9">
                <!-- cell -->
                <div class="decisions__cell decisions__title">
                    <!-- inner -->
                    <div class="decisions__title-inner">
                        <span><?= _e( 'Предлагаем' ) ?></span>
                        <h2 class="decisions__title-title"><?= _e( 'Решения под<br> проекты' ) ?></h2>
                    </div>
                    <!-- end inner -->
                </div>
                <!-- end cell -->
            </div>
            <!-- end col -->

            <?php $i = 1; foreach( $posts as $post ) : setup_postdata($post); ?>
                <!-- col -->
                <div class="col-xs-24 col-sm-<?= ($i == 2 || $i == 3 || $i == 5 || $i == 6) ? '7' : '10' ?> col-md-<?= ($i == 4) ? '9' : '5' ?> col-lg-<?= ($i == 4) ? '9' : '5' ?>">
                    <!-- cell -->
                    <a href="javascript:;" data-src="#decisions-<?= the_ID() ?>" data-fancybox="modal" class="decisions__cell">
                        <?php if( has_post_thumbnail() ) : ?>
                        <img
                                src="<?= ($i == 4) ? kama_thumb_src('w=840 &h=400') : kama_thumb_src('w=400 &h=400') ?>"
                                alt="<?= get_the_title() ?>"
                                title="<?= get_the_title() ?>"
                        >
                        <?php endif; ?>
                        <p><?= get_the_title() ?></p>
                    </a>
                    <!-- end cell -->

                    <div style="display: none" class="decisions__modal" id="decisions-<?= the_ID() ?>">

                        <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/></svg>
                        </button>

                        <!-- Row -->
                        <div class="decisions__modal-row">
                            <!-- Left -->
                            <div class="decisions__modal-row--left">
                                <h5 class="title"><?= the_title() ?></h5>
                                <img
                                        src="<?= kama_thumb_src('w=400 &h=400') ?>"
                                        alt="<?= get_the_title() ?>"
                                        title="<?= get_the_title() ?>"
                                        class="image"
                                >
                                <div class="text">
                                    <?= the_excerpt() ?>
                                </div>

                                <a href="<?= the_permalink() ?>" class="btn">
                                    <?= _e( 'Смотреть решения' ) ?>
                                </a>

                            </div>
                            <!-- End Left -->
                            <!-- Right -->
                            <div class="decisions__modal-row--right">
                                <h5 class="title"><?= _e( 'Стекло' ) ?></h5>

                                <?php
                                $filters = get_field( 'decisions_filters', get_the_ID() );

                                if( $filters ) :
                                    $title = [
                                        'color' => __( 'Цвет' ),
                                        'image' => __( 'Тип рисунка' ),
                                        'style' => __( 'Стиль' ),
                                    ];
                                    $filter_slug = [
                                        'color' => 'color',
                                        'image' => 'drawing',
                                        'style' => 'style',
                                    ];

                                    foreach ( $filters as $key => $filter ) :
                                        if( $filter ) :
                                            echo '<h6 class="subtitle">' . $title[$key] . '</h6>';
                                            echo '<ul class="list">';
                                            foreach ($filter as $item) :
                                                echo '<li>';
                                                echo '<a href="' . home_url( '/katalog/filters/' . $filter_slug[$key] . '/' . $item->slug . '/' ) . '">' . $item->name . '</a>';
                                                echo '</li>';
                                            endforeach;
                                            echo '</ul>';
                                        endif;
                                    endforeach;

                                endif;

                                ?>

                            </div>
                            <!-- End Right -->
                        </div>
                        <!-- End Row -->

                    </div>

                </div>
                <!-- end col -->
            <?php $i++; endforeach; $post = $tmp_post; ?>

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end decisions -->

<?php endif; ?>
