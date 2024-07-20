<?php

// Add admin menu
function icms_modal_infolettre_ajouter_menu() {
    add_menu_page(
        'ICMS Modal Infolettre', // Page title
        'Infolettre Modal', // Menu title
        'manage_options', // Capability
        'icms-modal-infolettre', // Menu slug
        'icms_modal_infolettre_ajouter_formulaire' // Callable function
    );
}
add_action('admin_menu', 'icms_modal_infolettre_ajouter_menu');

// Add admin form
function icms_modal_infolettre_ajouter_formulaire() {
    global $wpdb;
    $table_settings = $wpdb->prefix . 'icms_modal_infolettre_settings';
    $table_subscribers = $wpdb->prefix . 'icms_modal_infolettre_subscribers';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $background_color = sanitize_text_field($_POST['infolettre-couleur-fond']);
        $text_color = sanitize_text_field($_POST['infolettre-couleur-texte']);
        $modal_title = sanitize_text_field($_POST['infolettre-titre']);
        $name_label = sanitize_text_field($_POST['infolettre-intitule-nom']);
        $email_label = sanitize_text_field($_POST['infolettre-intitule-courriel']);
        $next_button_label = sanitize_text_field($_POST['infolettre-intitule-suivant']);
        $submit_button_label = sanitize_text_field($_POST['infolettre-intitule-soumettre']);

        // Update settings in the database
        $wpdb->update(
            $table_settings,
            array(
                'background_color' => $background_color,
                'text_color' => $text_color,
                'modal_title' => $modal_title,
                'name_label' => $name_label,
                'email_label' => $email_label,
                'next_button_label' => $next_button_label,
                'submit_button_label' => $submit_button_label
            ),
            array('id' => 1)
        );
    }

    icms_afficher_admin_form();
}

// Display admin form and subscribers list
function icms_afficher_admin_form() {
    global $wpdb;
    $table_settings = $wpdb->prefix . 'icms_modal_infolettre_settings';
    $table_subscribers = $wpdb->prefix . 'icms_modal_infolettre_subscribers';
    $settings = $wpdb->get_row("SELECT * FROM $table_settings WHERE id = 1");
    $subscribers = $wpdb->get_results("SELECT * FROM $table_subscribers");

    ob_start();
    include(plugin_dir_path(__FILE__) . '../templates/admin-form.php');
    include(plugin_dir_path(__FILE__) . '../templates/liste-abonne.php'); 
    $admin_form = ob_get_clean();
    echo $admin_form;
}
?>
