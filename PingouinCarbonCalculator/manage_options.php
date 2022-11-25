

<?php
echo '<h1>Pingouin Carbon Calculator</h1>';


// Description du plugin

function pingouin_carbon_calculator_description() {
    echo '<p>Calculez votre empreinte carbone</p>';
}

add_action('pingouin_carbon_calculator_description', 'pingouin_carbon_calculator_description');

// Bouton pour copier le shortcode

function pingouin_carbon_calculator_shortcode() {
    // Récupération du shortcode
    $shortcode = get_option('pingouin_carbon_calculator_shortcode');
    // Si le shortcode n'existe pas, on le crée
    if (empty($shortcode)) {
        $shortcode = '[pingouin_carbon_calculator]';
        update_option('pingouin_carbon_calculator_shortcode', $shortcode);
    }
    echo '<p>Utilisez ce shortcode pour afficher le calculator: ' . $shortcode . '</p>';
}

add_action('pingouin_carbon_calculator_shortcode', 'pingouin_carbon_calculator_shortcode');

