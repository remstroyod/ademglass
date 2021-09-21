<?php
/*
 * Fast Order
 */
if ( ! defined('ABSPATH')) :
    exit();
endif;

global $product;

?>
<!-- Popup -->
<div class="popup" style="max-width: 800px" data-url="<?= $args['page_url'] ?>">
    <!-- header -->
    <div class="popup__header">
        <h5 class="h3 popup__title">Быстрый заказ</h5>
        <p>для <?= $args['title'] ?></p>
    </div>
    <!-- end header -->
    <!-- content -->
    <div class="popup__content">
        <?= do_shortcode('[contact-form-7 id="1014" title="Быстрый заказ" html_class="row" url_page="'.$args['url_page'].'"]') ?>
    </div>
    <!-- end content -->
    <!-- footer -->
    <div class="popup__footer">
        <!-- Checkbox -->
        <div class="form-group form-checkbox form-checkbox-center">
            <input type="checkbox" name="check[]" id="form-fastorder" value="1" checked="">
            <label for="form-fastorder">
                Я соглашаюсь с тем, что вся информация, предоставленная вами, может быть использована по своему усмотрению
            </label>
        </div>
        <!-- End Checkbox -->
    </div>
    <!-- end footer -->
</div>
<!-- End Popup -->
