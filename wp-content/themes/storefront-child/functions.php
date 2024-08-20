<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

/**
 * @snippet       Related Cats @ WooCommerce Single Product
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 8
 * @community     https://businessbloomer.com/club/
 */

// Remove related products (default)
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

// Add back related products in a different location
add_action('woocommerce_after_single_product_summary', 'custom_related_products');
function custom_related_products() {
  woocommerce_related_products( array(
    'posts_per_page' => 3,
    'columns' => 3,
    'orderby' => 'rand'
  ));
}

add_filter( 'woocommerce_product_related_products_heading', function() {
  return 'Custom related products';
} );
