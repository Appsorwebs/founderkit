<?php
defined('WP_UNINSTALL_PLUGIN') || exit;
$settings=get_option('founderkit_settings', []);
if(!empty($settings['remove_on_uninstall'])) delete_option('founderkit_settings');
