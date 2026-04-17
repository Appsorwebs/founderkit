<?php
/**
 * Plugin Name: FounderKit
 * Description: Premium Gutenberg block suite for founders, academies, and digital product brands.
 * Version: 1.0.0
 * Author: AppsOrWebs Limited
 * Text Domain: founderkit
 */
defined('ABSPATH') || exit;
define('FOUNDERKIT_VERSION','1.0.0');
define('FOUNDERKIT_PATH', plugin_dir_path(__FILE__));
define('FOUNDERKIT_URL', plugin_dir_url(__FILE__));
define('FOUNDERKIT_BASENAME', plugin_basename(__FILE__));
require_once FOUNDERKIT_PATH.'includes/class-settings.php';
require_once FOUNDERKIT_PATH.'includes/class-blocks.php';
require_once FOUNDERKIT_PATH.'includes/class-addons.php';
require_once FOUNDERKIT_PATH.'includes/class-license.php';
require_once FOUNDERKIT_PATH.'includes/class-ajax.php';
require_once FOUNDERKIT_PATH.'includes/class-rest-api.php';
require_once FOUNDERKIT_PATH.'includes/class-cpt.php';
require_once FOUNDERKIT_PATH.'includes/class-capabilities.php';
require_once FOUNDERKIT_PATH.'admin/class-admin.php';
register_activation_hook(__FILE__, function(){ FounderKit_Settings::activate_defaults(); FounderKit_CPT::register(); FounderKit_Capabilities::add_caps(); add_action('founderkit_daily_license_check', [FounderKit_License::class, 'validate_remote']); if(!wp_next_scheduled('founderkit_daily_license_check')){ wp_schedule_event(time(), 'daily', 'founderkit_daily_license_check'); } flush_rewrite_rules(); });
register_deactivation_hook(__FILE__, function(){ wp_clear_scheduled_hook('founderkit_daily_license_check'); flush_rewrite_rules(); });
add_action('plugins_loaded', function(){ load_plugin_textdomain('founderkit', false, dirname(FOUNDERKIT_BASENAME).'/languages'); FounderKit_License::instance(); FounderKit_Blocks::instance(); FounderKit_Ajax::instance(); FounderKit_REST_API::instance(); FounderKit_CPT::instance(); FounderKit_Capabilities::instance(); FounderKit_Admin::instance(); });
