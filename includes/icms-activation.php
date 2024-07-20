<?php
function icms_modal_infolettre_activation() {
    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    $table_settings = $wpdb->prefix . 'icms_modal_infolettre_settings';
    $table_subscribers = $wpdb->prefix . 'icms_modal_infolettre_subscribers';

    $sql_settings = "CREATE TABLE $table_settings (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        background_color varchar(255) NOT NULL DEFAULT '#ffffff',
        text_color varchar(255) NOT NULL DEFAULT '#000000',
        modal_title varchar(255) NOT NULL DEFAULT 'Inscrivez-vous à notre infolettre !',
        name_label varchar(255) NOT NULL DEFAULT 'Nom',
        email_label varchar(255) NOT NULL DEFAULT 'Courriel',
        next_button_label varchar(255) NOT NULL DEFAULT 'Suivant',
        submit_button_label varchar(255) NOT NULL DEFAULT 'Soumettre',
        PRIMARY KEY  (id)
    ) $charset_collate;";

    $sql_subscribers = "CREATE TABLE $table_subscribers (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    dbDelta($sql_settings);
    dbDelta($sql_subscribers);

    // Default values for settings table
    $default_settings = array(
        'background_color' => '#ffffff',
        'text_color' => '#000000',
        'modal_title' => 'Inscrivez-vous à Notre Infolettre !',
        'name_label' => 'Nom',
        'email_label' => 'Courriel',
        'next_button_label' => 'Suivant',
        'submit_button_label' => 'Soumettre'
    );

    // Check if the settings table is empty before inserting default values
    $existing_settings = $wpdb->get_row("SELECT * FROM $table_settings WHERE id = 1");
    if (is_null($existing_settings)) {
        $wpdb->insert($table_settings, $default_settings);
    }
}

register_activation_hook(__FILE__, 'icms_modal_infolettre_activation');
?>
