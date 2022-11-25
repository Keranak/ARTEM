<?php
/**
 * @package Import-CSV-WP
 * @version 1.0.0
 */
/*
Plugin Name: PingouinContact
Description: Plugin de contact
Plugin URI: 
Author: Kerrian Le Bras
Version: 1.0.0
Author URI: kerrianlb.fr
*/

// Add a new top level menu link to the ACP
    function pingouincontact_admin_menu() {
        add_menu_page('PingouinContact', 'PingouinContact', 'manage_options', 'pingouincontact', 'pingouincontact_options_page');

    }
    add_action('admin_menu', 'pingouincontact_admin_menu');

// Display the admin options page
function pingouincontact_options_page() {
    @include_once('manage_options.php');
}

// Affichage du formulaire de contact grâce à un shortcode

function pingouincontact_form() {
    @include_once('form.php');
}

add_shortcode('pingouincontact', 'pingouincontact_form');

// Enregistrement du shortcode dans la base de données
function pingouincontact_activation() {
    $shortcode = '[pingouincontact]';
    update_option('pingouincontact_shortcode', $shortcode);
}

register_activation_hook(__FILE__, 'pingouincontact_activation');

// Suppression du shortcode de la base de données
function pingouincontact_deactivation() {
    delete_option('pingouincontact_shortcode');
}

register_deactivation_hook(__FILE__, 'pingouincontact_deactivation');

// Ajout d'un lien vers les options du plugin dans la liste des plugins
function pingouincontact_settings_link($links) {
    $settings_link = '<a href="admin.php?page=pingouincontact">Options</a>';
    array_unshift($links, $settings_link);
    return $links;
}

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'pingouincontact_settings_link');

// Mettre le CSS
function pingouincontact_enqueue_style() {
    wp_enqueue_style('pingouincontact', plugins_url('pingouincontact.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'pingouincontact_enqueue_style');