<?php
/*
 * Page Title
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
/*
 *
 */
?>
<!-- Head Page -->
<div class="sidebar__headpage">

    <!-- Row -->
    <div class="sidebar__headpage-row">

        <!-- Left -->
        <div class="sidebar__headpage-row--left">

            <?php if( is_category() ) : ?>
                <h1 class="h3 sidebar__headpage-title"><?= single_cat_title( '', false ) ?></h1>
            <?php elseif (is_single()) : ?>
                <?= the_title('<h1 class="h3 sidebar__headpage-title">', '</h1>') ?>
            <?php else: ?>
                <?= the_title('<h1 class="h3 sidebar__headpage-title">', '</h1>') ?>
            <?php endif; ?>

        </div>
        <!-- End Left -->

        <!-- Right -->
<!--        <div class="sidebar__headpage-row--right">-->
<!--            <button type="button" class="openSidebarLeft">-->
<!--                <span></span>-->
<!--                <span></span>-->
<!--                <span></span>-->
<!--            </button>-->
<!--            <a href="#close" class="catalog__header-right-overlay openSidebarLeft"></a>-->
<!--        </div>-->
        <!-- End Right -->

    </div>
    <!-- End Row -->

</div>
<!-- End Head Page -->
