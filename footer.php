<?php
/**
 * The footer for our theme
 * @package adem
 */
?>

    <?php get_template_part('template-parts/partials/partial', 'instagram'); ?>

    <?php get_template_part('template-parts/partials/partial', 'download'); ?>

    </main>
    <!-- END CONTENT-->
    <?php
    /**
     * footer_parts hook
     *
     * @hooked adem_footer_TagFooterForm - 10
     * @hooked adem_footer_TagFooterOpen - 20
     * @hooked adem_footer_TagFooterInner - 30
     * @hooked adem_footer_TagFooterClose - 100
     *
     */
    do_action('footer_parts');
    ?>
</div>
<!-- end container -->

<?php wp_footer(); ?>

<?= get_template_part('template-parts/partials/partial', 'yamap'); ?>

</body>
</html>