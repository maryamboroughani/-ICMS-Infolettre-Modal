<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;

// Ensure $wpdb is available
if (!isset($wpdb)) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    $wpdb = $GLOBALS['wpdb'];
}

$settings_table = $wpdb->prefix . 'icms_modal_infolettre_settings';
$subscribers_table = $wpdb->prefix . 'icms_modal_infolettre_subscribers';

// Drop tables
$wpdb->query("DROP TABLE IF EXISTS $settings_table");
$wpdb->query("DROP TABLE IF EXISTS $subscribers_table");


?>
