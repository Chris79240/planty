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
        
        // Diviser la chaîne $items en un tableau d'éléments de menu individuels
        $items_array = explode('</li>', $items);
        
        // Créer une variable contenant le code HTML du lien "Admin"
        $admin_link = '<li><a href="http://localhost/test/planty/wp-admin/" class="admin-link">Admin</a></li>';
        
        // Insérer le lien "Admin" en deuxième position dans le tableau $items_array
        array_splice( $items_array, 1, 0, $admin_link );
        
        // Rejoindre les éléments du tableau modifié en une seule chaîne
        $items = implode('</li>', $items_array);
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2 );

/*<li id="menu-item-833" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-833"><a href="http://localhost/test/planty/wp-admin/">Admin</a></li>
<a href="http://localhost/test/planty/wp-admin/">Admin</a>
</li>*/


/*custom_menu_item($items, $args) {
    if (is_user_logged_in()) {
        $items .= '<li><a href="#">Admin</a></li>';
        // Récupère les items de menu sous forme de tableau
        $items_array = explode('</li>', $items);

        // Calcul la position où insérer l'élément "Admin"
        $middle_index = floor(count($items_array) / 2);

        // Insère l'élément "Admin" à la position calculée
        array_splice($items_array, $middle_index, 0, '<li><a href="#">Admin</a></li>');

        // Convertit le tableau en chaîne de caractères HTML
        $items = implode('</li>', $items_array) . '</li>';
    }

  return $items;
}
add_filter('wp_nav_menu_items', 'custom_menu_item', 10, 2);*/

