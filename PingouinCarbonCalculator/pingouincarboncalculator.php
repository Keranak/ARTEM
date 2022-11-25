<?php
/*
Plugin Name: Pingouin Calculator Carbon
Plugin URI: 
Description: Calculez votre empreinte carbone
License: 
License URI: 
Author: Kerrian Le Bras
Author URI:
Version: 1.0.0
*/


/*
 * Ajout d'un menu dans l'administration
 */

function pingouin_carbon_calculator_menu() {
    add_menu_page('Pingouin Carbon Calculator', 'Pingouin Carbon Calculator', 'manage_options', 'pingouin-carbon-calculator', 'pingouin_carbon_calculator_options', 'dashicons-chart-area');
}

add_action('admin_menu', 'pingouin_carbon_calculator_menu');



/*
 * Affichage de la page d'options
 */

function pingouin_carbon_calculator_options() {
    @include_once('manage_options.php');
}



