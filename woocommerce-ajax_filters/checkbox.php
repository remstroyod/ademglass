<?php
/**
* The template for displaying checkbox filters
*
* Override this template by copying it to yourtheme/woocommerce-ajax_filters/checkbox.php
*
* @author     BeRocket
* @package     WooCommerce-Filters/Templates
* @version  1.0.1
*/

extract($berocket_query_var_title);
global $berocket_unique_value;
$berocket_unique_value++;
$random_name = strval($berocket_unique_value);
$hiden_value = false;
$child_parent = berocket_isset($child_parent);
$is_child_parent = $child_parent == 'child';
$is_child_parent_or = ( $child_parent == 'child' || $child_parent == 'parent' );
$child_parent_depth = berocket_isset($child_parent_depth, false, 0);
if ( $child_parent == 'parent' ) {
    $child_parent_depth = 0;
}
$added_categories = array();
$item_i = 0;
if ( ! empty($terms) ):
    $display_inline_classes = array();
    foreach( $terms as $term ):
        $is_first = ($term->term_id == 'R__term_id__R');
        $term_taxonomy_echo = berocket_isset($term, 'wpml_taxonomy');
        if( empty($term_taxonomy_echo) ) {
            $term_taxonomy_echo = berocket_isset($term, 'taxonomy');
        }
        $parent_count = 0;
        $item_i++;
        if ( $is_child_parent && $is_first ) {
            ?><li class="berocket_child_parent_sample"><ul><?php
        } elseif(isset($term->parent) && $term->parent != 0) {
            $parent_count = get_ancestors( $term->term_id, $term->taxonomy );
            $parent_count = count($parent_count);
        } elseif( isset($term->depth) ) {
            $parent_count = $term->depth;
        }
        $added_categories[] = berocket_isset($term, 'term_id');
        $data_jquery_arr = array(
            'term_slug' => urldecode(berocket_isset($term, 'slug')),
            'term_name' => ( ! empty($icon_before_value) ? ( ( substr( $icon_before_value, 0, 3) == 'fa-' ) ? '<i class="fa '.$icon_before_value.'"></i>' : '<i class="fa"><img class="berocket_widget_icon" src="'.$icon_before_value.'" alt=""></i>' ) : '' ) . htmlentities(berocket_isset($term, 'name'), ENT_QUOTES) . ( ! empty($icon_after_value) ? ( ( substr( $icon_after_value, 0, 3) == 'fa-' ) ? '<i class="fa '.$icon_after_value.'"></i>' : '<i class="fa"><img class="berocket_widget_icon" src="'.$icon_after_value.'" alt=""></i>' ) : '' ),
            'filter_type' => berocket_isset($filter_type) ,
            'term_id' => berocket_isset($term, 'term_id'),
            'operator' => $operator,
            'term_ranges' => str_replace ( '*' , '-' , berocket_isset($term, 'term_id')),
            'taxonomy' => $term_taxonomy_echo,
            'term_count' => berocket_isset($term, 'count'),
        );
        $data_jquery = array();
        foreach($data_jquery_arr as $data_jquery_name => $data_jquery_string) {
            if( $data_jquery_string !== '' ) {
                $data_jquery[] = 'data-'.$data_jquery_name."='".$data_jquery_string."'";
            }
        }
        $data_jquery = implode(' ', $data_jquery);
        ?><li class="catalog__filter-cell-line berocket_term_parent_<?php echo ( property_exists($term, 'parent') ? $term->parent : '' ); ?> berocket_term_depth_<?php echo $parent_count; ?> <?php echo "brw-" . preg_replace( "#^(pa)?_#", "", $attribute ) . "-" . preg_replace( "#^(pa)?_#", "", berocket_isset($term, 'slug') ); ?> <?php if ( $is_child_parent ) echo 'R__class__R ';
            if( ! empty($hide_o_value) && isset($term->count) && $term->count == 0 && ( !$is_child_parent || !$is_first ) ) {
                echo ' berocket_hide_o_value'; $hiden_value = true;
            }
            if( ! empty($hide_sel_value) && br_is_term_selected( $term, true, $is_child_parent_or, $child_parent_depth ) != '' ) {
                echo ' berocket_hide_sel_value'; $hiden_value = true;
            }
            if( ! empty($attribute_count) ) {
                if( $item_i > $attribute_count ) {
                    echo ' berocket_hide_attribute_count_value';
                    $hiden_value = true;
                } elseif( ! empty($hide_o_value) && berocket_isset($term, 'count') == 0 && ( !$is_child_parent || !$is_first ) ) {
                    echo ' berocket_hide_attribute_count_value';
                    $item_i--;
                    $hiden_value = true;
                }
            }
            if( ! empty($hide_child_attributes) && in_array(berocket_isset($term, 'parent'), $added_categories) ) {
                echo ' berocket_hide_child_attributes';
            } ?>"><span><input id='checkbox_<?php echo str_replace ( '*' , '-' , berocket_isset($term, 'term_id')), str_replace ( '*' , '-' , $term_taxonomy_echo) ?>_<?php echo berocket_isset($random_name); 
                ?>' class="<?php echo ( empty($uo['class']['checkbox_radio']) ? '' : $uo['class']['checkbox_radio'] ) ?> checkbox_<?php echo str_replace ( '*' , '-' , berocket_isset($term, 'term_id')), str_replace ( '*' , '-' , $term_taxonomy_echo) ?>" type='<?php echo ( ! empty( $disable_multiple_ranges ) ? 'radio' : 'checkbox' );
                ?>' autocomplete="off"<?php 
                echo ( empty($uo['style']['checkbox_radio']) ? '' : ' style="' . $uo['style']['checkbox_radio'] . '"' );
                echo br_is_term_selected( $term, true, $is_child_parent_or, $child_parent_depth ) . ( ! empty( $disable_multiple_ranges ) ? ' name="radio_' . $term_taxonomy_echo . '_' . $x . '_' . $random_name . '"' : '' );
                echo ' '.$data_jquery;
                ?>/><label data-for='checkbox_<?php echo str_replace ( '*' , '-' , berocket_isset($term, 'term_id')), str_replace ( '*' , '-' , $term_taxonomy_echo) ?>'<?php echo ( empty($uo['style']['label']) ? '' : ' style="' . $uo['style']['label'] . '"' );
                ?> class="berocket_label_widgets<?php if( br_is_term_selected( $term, true, $is_child_parent_or, $child_parent_depth ) != '') echo ' berocket_checked'; ?>"><?php
                    echo apply_filters( 'berocket_check_radio_color_filter_term_text', ( ( ! empty($icon_before_value) ? ( ( substr( $icon_before_value, 0, 3) == 'fa-' ) ? '<i class="fa '.$icon_before_value.'"></i>' : '<i class="fa"><img class="berocket_widget_icon" src="'.$icon_before_value.'" alt=""></i>' ) : '' ) . 
                    apply_filters('berocket_radio_filter_term_name', berocket_isset($term, 'name'), $term) . 
                    ( ! empty($icon_after_value) ? ( ( substr( $icon_after_value, 0, 3) == 'fa-' ) ? '<i class="fa '.$icon_after_value.'"></i>' : '<i class="fa"><img class="berocket_widget_icon" src="'.$icon_after_value.'" alt=""></i>' ) : '' ) ), $term, $operator, ( ! empty( $disable_multiple_ranges ) ? $term->slug : false ) );
                ?></label><?php if( ! empty($hide_child_attributes) ) { 
                    ?><span data-term_id='<?php echo str_replace ( '*' , '-' , berocket_isset($term, 'term_id')) ?>' class="br_child_toggle br_child_toggle_<?php echo str_replace ( '*' , '-' , berocket_isset($term, 'term_id')); ?>"><i class="fa fa-plus" aria-hidden="true"></i></span><?php 
                } ?></span></li><?php
        if( ! empty($hide_child_attributes) && in_array(berocket_isset($term, 'parent'), $added_categories) ) {
            $display_inline_classes[] = '.br_child_toggle.br_child_toggle_'.str_replace ( '*' , '-' , berocket_isset($term, 'parent'));
        }
        if ( $is_child_parent && $is_first ) {
            ?></ul></li><?php
        }
    endforeach;
    $display_inline_classes = array_unique($display_inline_classes);
    if( count($display_inline_classes) ) {
        echo '<style>
        '.implode(',', $display_inline_classes).' {
            display: inline-block;
        }
        </style>';
    }
    if ( $is_child_parent && is_array( berocket_isset( $terms ) ) && count( $terms ) == 1 ) {
        if ( BeRocket_AAPF_Widget_functions::is_parent_selected( $attribute, $child_parent_depth - 1 ) ) {
            echo '<li>' . $child_parent_no_values . '</li>';
        } else {
            echo '<li>' . $child_parent_previous . '</li>';
        }
    } else {
        if ( $child_parent_no_values ) {
            if ( ! $child_parent_depth ) $child_parent_depth = '0';
            ?><script>
                if ( typeof(child_parent_depth) == 'undefined' || child_parent_depth < <?php echo $child_parent_depth; ?> ) {

                    child_parent_depth = <?php echo (int) $child_parent_depth; ?>;
                }
                jQuery(document).ready(function() {
                    if( child_parent_depth == <?php echo (int) $child_parent_depth; ?> ) {
                        jQuery('.woocommerce-info').text('<?php echo $child_parent_no_values; ?>');
                    }
                });
            </script><?php
        }
    }
    if( ! empty($attribute_count_show_hide) ) {
        if( $attribute_count_show_hide == 'hidden' ) {
            $hide_button_value = true;
        } elseif( $attribute_count_show_hide == 'visible' ) {
            $hide_button_value = false;
        }
    }
    if( empty($hide_button_value) ) { 
        ?><li class="berocket_widget_show_values"<?php if( !$hiden_value ) echo 'style="display: none;"' ?>><?php _e('Show value(s)', 'BeRocket_AJAX_domain') ?><span class="show_button fa"></span></li><?php 
    } 
endif;
