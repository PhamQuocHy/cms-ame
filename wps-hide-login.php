<?php
/*
Plugin Name: CMS AME Digital
Description: CMS AME Digital là hệ thống quản trị website chuyên nghiệp dành cho khách hàng đang sử dụng website do AME Digital cung cấp và phát triển.
Donate link: https://amedigital.vn/
Author: AME Digital.
Author URI: https://amedigital.vn/
Version: 1.0
Requires at least: 4.1
Tested up to: 6.0
Requires PHP: 7.0
Domain Path: languages
Text Domain: ame-digital
License: GPLv2 or later
License URI: https://amedigital.vn/
*/


if (!defined('ABSPATH')) {
	die('-1');
}

// Plugin constants
define('WPS_HIDE_LOGIN_VERSION', '1.9.6');
define('WPS_HIDE_LOGIN_FOLDER', 'wps-hide-login');

define('WPS_HIDE_LOGIN_URL', plugin_dir_url(__FILE__));
define('WPS_HIDE_LOGIN_DIR', plugin_dir_path(__FILE__));
define('WPS_HIDE_LOGIN_BASENAME', plugin_basename(__FILE__));

require_once WPS_HIDE_LOGIN_DIR . 'autoload.php';

register_activation_hook(__FILE__, array('\WPS\WPS_Hide_Login\Plugin', 'activate'));

add_action('plugins_loaded', 'plugins_loaded_wps_hide_login_plugin');
function plugins_loaded_wps_hide_login_plugin()
{
	\WPS\WPS_Hide_Login\Plugin::get_instance();

	load_plugin_textdomain('wps-hide-login', false, dirname(WPS_HIDE_LOGIN_BASENAME) . '/languages');
}
require_once WPS_HIDE_LOGIN_DIR . 'custom-admin.php';

// 

function bhm_create_db_process()
{

	global $wpdb;
	$table_name = $wpdb->prefix . "options";
	$wpdb->insert(
		$table_name, //table
		array('option_name' => 'hide_menu_bh_plugin')
	);

	$wpdb->insert(
		$table_name, //table
		array('option_name' => 'hide_sub_menu_bh_plugin')
	);

	$wpdb->insert(
		$table_name, //table
		array('option_name' => 'hide_top_menu_bh_plugin')
	);

	$wpdb->insert(
		$table_name, //table
		array('option_name' => 'menu_order_bh_plugin')
	);
}

function __construct()
{
	register_activation_hook(__FILE__, 'bhm_create_db_process');
}
function bhm_Hide_Menus()
{
	add_menu_page("Hide Menu", "Hide Menu", "manage_options", "hide-admin-menu", "bhm_get_menu_list");
}

add_action("admin_menu", "bhm_Hide_Menus");

require_once(plugin_dir_path(__FILE__) . 'menu-list.php');
