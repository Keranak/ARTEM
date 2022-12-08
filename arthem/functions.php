<?php
//Chargement CSS et JS
function arthem_register_assets()
{

    // Déclarer le JS
    if (is_page('accueil')) {
        wp_enqueue_script(
            'arthem',
            get_template_directory_uri() . '/assets/js/script.js',
            array(),
        null,
        true
        );
    }

    //menu.js
    wp_enqueue_script(
        'arthem-menu',
        get_template_directory_uri() . '/assets/js/menu.js',
        array(),
    null,
    true
    );

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style(
        'arthem',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // add font-awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css',
        array(),
        '6.2.1'
    );
}
add_action('wp_enqueue_scripts', 'arthem_register_assets');

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Ajouter le logo
add_theme_support('custom-logo');

// Hooks
add_filter('upload_mimes', 'capitaine_mime_types');
add_filter('wp_check_filetype_and_ext', 'capitaine_file_types', 10, 4);

// Autoriser l'import des fichiers SVG et WEBP
function capitaine_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

// Contrôle de l'import d'un WEBP
function capitaine_file_types($types, $file, $filename, $mimes)
{
    if (false !== strpos($filename, '.webp')) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }
    return $types;
}

// Header
function header_function()
{
    register_nav_menu('header', __('Main navigation'));
}
add_action('init', 'header_function');


// Pages d'options
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(
        array(
            'page_title' => 'Chiffres',
            'menu_slug' => 'number',
            'redirect' => false,
            'position' => 2
        )
    );

    acf_add_options_page(
        array(
            'page_title' => 'Conseils',
            'menu_slug' => 'advices',
            'redirect' => false,
            'position' => 2
        )
    );
}