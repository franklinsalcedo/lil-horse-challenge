<?php
  function cwf_enqueue_scripts() {
    wp_enqueue_style( 'cwf-styles', plugin_dir_url(__DIR__) . 'css/cwf-styles.css' );
    wp_enqueue_script( 'cwf-functions', plugin_dir_url(__DIR__) . 'js/cwf-functions.js', array('jquery'), '1.0', true );
    wp_localize_script( 'cwf-functions', 'ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
  }

  add_action( 'wp_enqueue_scripts', 'cwf_enqueue_scripts' );

  function cwf_calc_width ($total, $goal) {
    $cwf_percent = ((float)$total * 100) / $goal;
    $cwf_percent = round($cwf_percent, 0);
    return $cwf_percent;
  }

  function cwf_checkout_message() {
    global $woocommerce;
    $cwf_coupon = '10HORSES';
    $cwf_shop_url = get_permalink( wc_get_page_id( 'shop' ) );
    $cwf_currency = get_woocommerce_currency_symbol();
    $cwf_discount = '10';
    $cwf_discount_type = 'percent';
    switch ( $cwf_discount_type ) {
      case 'percent' :
        $cwf_discount_text = $cwf_discount . '%';
        break;
      case 'money' :
        $cwf_discount_text = $cwf_currency . $cwf_discount;
        break;
    }
    $cwf_goal_amount = 100;
    $cwf_total_cart = $woocommerce->cart->subtotal_ex_tax;
    $cwf_rest = ( $cwf_total_cart < $cwf_goal_amount ) ? $cwf_goal_amount - $cwf_total_cart : 0;
    $cwf_message = ( $cwf_rest > 0 ) ? 'You are ' . get_woocommerce_currency_symbol() . number_format((float)$cwf_rest, 2, '.', '') . ' away from getting ' . $cwf_discount_text . ' off this order' : '<strong>Great! You have ' . $cwf_discount_text . ' off on this order!</strong>';
    $cwf_width_bar = ( $cwf_rest > 0 ) ? cwf_calc_width($cwf_total_cart, $cwf_goal_amount) : 100;
    if( $cwf_rest <= 0 ) {
      if ( !$woocommerce->cart->has_discount( $coupon_code ) ) $woocommerce->cart->add_discount( $cwf_coupon );
    } else {
      $woocommerce->cart->remove_coupons( $cwf_coupon );
    }
    include_once( 'message.php' );
  }

  add_action( 'woocommerce_checkout_before_customer_details', 'cwf_checkout_message' );
  add_action( 'woocommerce_before_cart', 'cwf_checkout_message' );

  function cwf_get_cart_total() {
    global $woocommerce;
    $total_cart = $woocommerce->cart->subtotal_ex_tax;
    echo $total_cart;
    wp_die();
  }

  add_action('wp_ajax_get_cart_total', 'cwf_get_cart_total');
  add_action('wp_ajax_nopriv_get_cart_total', 'cwf_get_cart_total');
