<?php
/*
Plugin Name: ICMS Infolettre Modal
Description: Affiche un modal d’inscription à une infolettre.
Version: 1.0
Author: Maryam Boroughani
*/

require_once(plugin_dir_path(__FILE__) . 'includes/icms-activation.php');
require_once(plugin_dir_path(__FILE__) . 'includes/panneau-admin.php');

// Activation and uninstall hooks
register_activation_hook(__FILE__, 'icms_modal_infolettre_activation');
register_uninstall_hook(__FILE__, 'icms_modal_infolettre_uninstall');

// Enqueue CSS and JS
add_action('wp_enqueue_scripts', 'infolettre_modal_enqueue_assets');
function infolettre_modal_enqueue_assets() {
    wp_enqueue_style('infolettre-modal-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    wp_enqueue_script('infolettre-modal-script', plugin_dir_url(__FILE__) . 'assets/js/script.js', array('jquery'), null, true);
}

// Enqueue admin CSS and JS
add_action('admin_enqueue_scripts', 'infolettre_modal_admin_enqueue_assets');
function infolettre_modal_admin_enqueue_assets() {
    wp_enqueue_style('infolettre-modal-admin-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    wp_enqueue_script('infolettre-modal-admin-script', plugin_dir_url(__FILE__) . 'assets/js/script.js', array('jquery'), null, true);
}

// Handle form submission
function icms_modal_infolettre_handle_form() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['infolettre_modal_submit'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'icms_modal_infolettre_subscribers';

        $nom = sanitize_text_field($_POST['nom']);
        $courriel = sanitize_email($_POST['courriel']);

        if (!empty($nom) && is_email($courriel)) {
            $wpdb->insert($table_name, array(
                'nom'      => $nom,
                'courriel' => $courriel
            ));

            echo '<p>' . __('Inscription réussie.', 'icms-infolettre-modal') . '</p>'; 
        } else {
            echo '<p>' . __('Veuillez remplir les champs correctement.', 'icms-infolettre-modal') . '</p>'; 
        }
    }
}
add_action('init', 'icms_modal_infolettre_handle_form');

// Display modal form in footer
function display_infolettre_modal_in_footer() {
    ob_start();
    include(plugin_dir_path(__FILE__) . 'templates/modal-form.php');
    echo ob_get_clean();
}
add_action('wp_footer', 'display_infolettre_modal_in_footer');
?>
