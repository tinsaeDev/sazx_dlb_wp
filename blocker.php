<?php
/**
 * Plugin Name: Direct Link Blocker
 * Plugin URI: https://tinsaebelay.github.io/
 * Description: Blocks direct access to your wordpress upload files.
 * Version:0.0.1
 * Author: Tinsae Belay
 * Author URI: https://tinsaebelay.github.io/
 * Text Domain: Blocker
 * Domain Path: /i18n/languages/
 * Requires at least: 5.6
 * Requires PHP: 7.0
 *
 * @package WooCommerce
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'SAZX_DLB_PLUGIN_FILE' ) ) {
	define( 'SAZX_DLB_PLUGIN_FILE', __FILE__ );
}


/**
 *? - During activation.
 *  	 - Create a page for downloader
 * 		 - Create a httaccess file inside uploads directory
 * 
 *? - During Deactivation.
 *  	 - delete the page  page for downloader
 * 		 - remove a httaccess file inside uploads directory
 * 
 */