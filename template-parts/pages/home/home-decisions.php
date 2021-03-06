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
                                <?php
                                $variants = get_field( 'variants', get_the_ID() );
                                ?>
                                <h5 class="title"><?= $variants['title'] ?></h5>

                                <?php if( $variants['list'] ) : ?>
                                    <!-- variants -->
                                    <div class="solutions__variants">

                                        <!-- list -->
                                        <ul class="row solutions__variants-list modal">

                                            <?php foreach ( $variants['list'] as $item ) : ?>
                                                <li>

                                                    <!-- item -->
                                                    <a href="<?= $item['link']['url'] ?>" class="solutions__variants-list-item">

                                                        <!-- image -->
                                                        <div class="solutions__variants-list-item-image">

                                                            <?= kama_thumb_img( 'w=300 &h=300 &crop=top &attach_id=' . $item['image'] ) ?>

                                                        </div>
                                                        <!-- end image -->

                                                        <!-- text -->
                                                        <div class="solutions__variants-list-item-text">
                                                            <p><?= $item['title'] ?></p>
                                                            <span><?= __( 'Смотреть варианты', 'adem' ) ?> <i class="fa fa-angle-right"></i></span>
                                                        </div>
                                                        <!-- end text -->

                                                    </a>
                                                    <!-- end item -->

                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                        <!-- end list -->

                                    </div>
                                    <!-- end variants -->
                                <?php endif; ?>

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
