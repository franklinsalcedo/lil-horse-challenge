<?php
  function cov_add_menu_link() {
    $my_hook = add_menu_page(
      __( 'COV Dashboard', 'custom-order-views'),
      __( 'Custom order views', 'custom-order-views'),
      'administrator',
      'cov-page',
      'cov_dashboard'
    );
  }

  add_action( 'admin_menu', 'cov_add_menu_link' );
  
  function cov_dashboard() {
    include( 'cov-dashboard.php' );
  }