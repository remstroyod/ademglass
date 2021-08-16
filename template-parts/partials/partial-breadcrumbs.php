<?php
/*
 * Breadcrumbs
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;
/*
 *
 */
?>
<?php if (function_exists('rank_math_the_breadcrumbs')) : ?>

    <?= rank_math_the_breadcrumbs() ?>

<?php endif; ?>