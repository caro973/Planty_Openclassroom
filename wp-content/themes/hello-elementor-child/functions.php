<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 20 );

// END ENQUEUE PARENT ACTION

// Enregistrer les menus dans le thème enfant
function theme_enfant_setup() {
    // Enregistrer un nouvel emplacement de menu spécifique au thème enfant
    register_nav_menus(array(
        'child_header' => __('Child Header Menu', 'hello-elementor-child'),
    ));
}
add_action('after_setup_theme', 'theme_enfant_setup');




function add_admin_link_to_menu($items, $args) {

        // Créez un nouvel élément de menu pour le lien "Admin"
        $admin_item = (object) array(
            'title'            => 'Admin',
            'menu_item_parent' => 0,
            'ID'               => 'admin',
            'db_id'            => '',
            'url'              => admin_url(),
            'classes'          => array('menu-item'),
        );

        // Initialisez un tableau pour stocker les nouveaux éléments de menu
        $new_items = array();

        // Parcourez les éléments de menu existants
        foreach ($items as $item) {
            // Ajoutez chaque élément au nouveau tableau
            $new_items[] = $item;

            // Ajoutez l'élément "Admin" après "Nous Rencontrer"
            if ($item->title == 'Nous Rencontrer') {
                $new_items[] = $admin_item;
            }
        }

        return $new_items;

}
add_filter('wp_nav_menu_objects', 'add_admin_link_to_menu', 10, 2);





