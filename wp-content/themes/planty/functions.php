<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Ajoute le style CSS du thème parent au thème enfant
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), 
    filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

// Ajouter le lien "Admin" dans le menu
function ajouter_lien_admin_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté
    if ( is_user_logged_in() ) {
        // Ajouter le lien "Admin" à l'emplacement spécifié
   
    if ( 'menu-1' == $args->theme_location ) {
         
    
        // Diviser la chaîne $items en un tableau d'éléments de menu individuels
        $items_array = explode('</li>', $items);
        
        // Créer une variable contenant le code HTML du lien "Admin"
        $admin_link = '<li><a href="http://localhost/test/planty/wp-admin/" class="admin-link">Admin</a></li>';
        
        // Insérer le lien "Admin" en deuxième position dans le tableau $items_array
        array_splice( $items_array, 1, 0, $admin_link );
        
        // Rejoindre les éléments du tableau modifié en une seule chaîne
        $items = implode('</li>', $items_array);
    }
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2 );

