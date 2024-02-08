<?php
/**
 * Plugin Name: Vite for WP example:
 * Description: A plugin to demonstrate Vite for WP integration.
 * Author: Jeremías San Martín
 * Author URI: https://gscdesigns.net
 * License: GPLv2
 * Version: 0.0.1
 */


 add_action( 'admin_menu', 'vite_for_wp_init_menu' );

 /**
  * Init Admin Menu.
  *
  * @return void
  */
 function vite_for_wp_init_menu() {
     add_menu_page( __( 'Vite for WP example', 'vite_for_wp'), __( 'Vite for WP example', 'vite_for_wp'), 'manage_options', 'vite_for_wp', 'vite_for_wp_admin_page', 'dashicons-admin-generic', '2.1' );
 }
 
 /**
  * Init Admin Page.
  *
  * @return void
  */
 function vite_for_wp_admin_page() {
     require_once plugin_dir_path( __FILE__ ) . 'inc/backend.php';
 }

require 'inc/shortcode.php';

require 'vite-load.php';

