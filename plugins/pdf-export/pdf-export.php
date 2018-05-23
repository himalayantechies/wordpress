<?php
/*
 * Plugin Name: ISSA PDF
 * Version: 1.0.1
 * Plugin URI: 
 * Description: Create PDF documents of the Search Results of ISSA Supplier Register
 * Author: 
 * Author URI: 
 * Requires at least: 3.9
 * Tested up to: 4.8
 *
 * Text Domain: issapdf
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'ISSAPDF' ) ) {

	final class ISSAPDF {

		private static $instance;

		public static function instance() {

			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof ISSAPDF ) ) {

				self::$instance = new ISSAPDF;

				self::$instance->setup_constants();

				//add_action( 'plugins_loaded', array( self::$instance, 'issapdf_load_textdomain' ) );

				self::$instance->includes();
			}

			return self::$instance;
		}

		// public function issapdf_load_textdomain() {

		// 	load_plugin_textdomain( 'issapdf', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

		// }

		private function setup_constants() {

			if ( ! defined( 'ISSAPDF_VERSION' ) ) { define( 'ISSAPDF_VERSION', '1.0.0' ); }
			if ( ! defined( 'ISSAPDF_PLUGIN_DIR' ) ) { define( 'ISSAPDF_PLUGIN_DIR', plugin_dir_path( __FILE__ ) ); }
			if ( ! defined( 'ISSAPDF_PLUGIN_URL' ) ) { define( 'ISSAPDFPLUGIN_URL', plugin_dir_url( __FILE__ ) ); }
			if ( ! defined( 'ISSAPDF_PLUGIN_FILE' ) ) { define( 'ISSAPDF_PLUGIN_FILE', __FILE__ ); }

		}

		private function includes() {

			require_once( ABSPATH . "wp-includes/pluggable.php" );
			require_once( ABSPATH . "wp-includes/functions.php" );
			require_once ISSAPDF_PLUGIN_DIR . 'includes/functions.php';
		}

		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'issapdf' ), ISSAPDF_VERSION );
		}

		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'issapdf' ), ISSAPDF_VERSION );
		}
	}
}

register_activation_hook( __FILE__, 'my_plugin_create_db' );
function my_plugin_create_db() {
	global $wpdb;
	$table1 = 'Tbl_Search_Detail';
	$table2 = 'Tbl_Search_Results';

	$sql1 = "CREATE TABLE IF NOT EXISTS ".$table1." (
	  			Search_ID mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
	  			Search_Registration_ID mediumint(9) unsigned NOT NULL,
				Search_Date date DEFAULT NULL,
				Search_Desc varchar(255) DEFAULT NULL,
				Search_Data text DEFAULT NULL,
	  			PRIMARY KEY  (Search_ID)
			)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

	$sql2 = "CREATE TABLE IF NOT EXISTS ".$table2." (
				Search_Result_ID mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
				Search_Result_Search mediumint(9) unsigned NOT NULL,
				Search_Result_Supplier int(25) DEFAULT NULL,
				PRIMARY KEY  (Search_Result_ID),
       			FOREIGN KEY  (Search_Result_Search) REFERENCES Tbl_Search_Detail (Search_ID)			
			)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	$wpdb->query( $sql1 );
	$wpdb->query( $sql2 );
}

register_deactivation_hook( __FILE__, 'my_plugin_drop_db' );
function my_plugin_drop_db() {
	global $wpdb;
	$table1 = 'Tbl_Search_Detail';
	$table2 = 'Tbl_Search_Results';
	$sql1 = "DROP TABLE IF EXISTS ".$table1.";";
	$sql2 = "DROP TABLE IF EXISTS ".$table2.";";
	$wpdb->query($sql2);
	$wpdb->query($sql1);
}

//register_activation_hook(__FILE__, 'add_my_custom_page');
// function add_my_custom_page() {
//     $url = site_url('/search-supplier?saved_searches=true', 'http');
//     global $wpdb;

//     if ( null === $wpdb->get_row( "SELECT post_name FROM {$wpdb->prefix}posts WHERE post_name = 'search-supplier'", 'ARRAY_A' ) ) {
//     	$current_user = wp_get_current_user();
// 	    $my_post = array(
// 	      'post_title'    => wp_strip_all_tags( 'Search Supplier' ),
// 	      'post_content'  => '',
// 	      'post_status'   => 'publish',
// 	      'post_author'   => $current_user->ID,
// 	      'post_content'  => '[supplier_search_content]',
// 	      'guid' 		  => $url,
// 	      'post_type'     => 'page',
// 	    );
//     	wp_insert_post( $my_post );
// 	}
// }

function ISSAPDF() {

	return ISSAPDF::instance();

}

ISSAPDF();


