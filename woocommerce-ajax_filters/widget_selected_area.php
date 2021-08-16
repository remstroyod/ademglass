<?php extract($berocket_query_var_title); ?>
<div class="catalog__filter-clear <?php echo ( ! empty($is_hooked) ? 'berocket_aapf_selected_area_hook' : 'berocket_aapf_widget-wrapper' ); ?> berocket_aapf_selected_area_block">

    <div class="berocket_aapf_widget berocket_aapf_widget_selected_area <?php echo ( ! empty($selected_area_show) ? 'berocket_aapf_widget_selected_area_text' : 'berocket_aapf_widget_selected_area_hide' ); ?><?php if ( ! empty($is_hide_mobile) && ! empty($is_hooked) ) echo ' berocket_aapf_hide_mobile' ?>" style="<?php echo ( ! empty($selected_is_hide) ? 'display:none;' : 'display:block;' ).berocket_isset($style); ?>"></div>
</div>
