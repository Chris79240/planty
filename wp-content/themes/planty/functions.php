<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Ajoute le style CSS du thème parent au thème enfant
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Ajouter le lien "Admin" dans le menu
function ajouter_lien_admin_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté
    if ( is_user_logged_in() ) {
        // Ajouter le lien "Admin" à l'emplacement spécifié
        //$items = str_replace( 'id="menu-item-34"', 'id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"', $items );
        $items .= '<li><a href="http://localhost/test/planty/wp-admin/">1000Admin</a></li>';
;
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2 );


/*<li id="menu-item-833" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-833"><a href="http://localhost/test/planty/wp-admin/">Admin</a></li>
<a href="http://localhost/test/planty/wp-admin/">Admin</a>
</li>

/*
custom_menu_item($items, $args) {
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
add_filter('wp_nav_menu_items', 'custom_menu_item', 10, 2);
*/
