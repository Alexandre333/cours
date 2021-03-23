<?php 

// Liens avec nos fichiers CSS
function LoadCSSFiles(){

	// Appel du framework Bootstrap CSS
	wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css');

	// Appel du framework Bootstrap JS
	 wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

	// Appel du css par défaut : style.css
	wp_enqueue_style('cours-style', get_stylesheet_uri());

	// Appel seulement sur la page d'accueil
	/*if( is_front_page() ) {
		wp_enqueue_script( 'slug', ... );
	}*/	
}
add_action('wp_enqueue_scripts', 'LoadCSSFiles');


// Ajouter automatiquement le titre des pages dans l'en-tête du site
add_theme_support( 'title-tag' );

// Configuration de la navigation
function navigations(){
	register_nav_menus(
	  	array(
	  		'menu-header' => 'Haut de page',
	  		'menu-footer' => 'Bas de page',
	  	)
  	);
}
add_action('init', 'navigations');

// Déclaration sidebar
register_sidebar(array(
	'id' => 'blog-sidebar',
	'name' => 'Blog',
));

// Configuration du menu Walker
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// CPT et taxonomie
function nouveau_CPT() {
	// CPT Portfolio
	// Déclaration des libellés sur le panel admin
    $labels = array(
        'name' => 'Recettes',
        'all_items' => 'Toutes les recettes',
        'singular_name' => 'Recette',
        'add_new_item' => 'Ajouter une recette',
        'edit_item' => 'Modifier la recette',
        'menu_name' => 'Recettes'
    );

	// Déclaration des fonctionnalités dispos
	// Toutes les fonctionnalités possibles dans le codex
	// https://developer.wordpress.org/reference/functions/register_post_type/
	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'comments'),
        'menu_position' => 20,
        'menu_icon' => 'dashicons-buddicons-community',
	);

	register_post_type( 'recettes', $args );

	// Déclaration de la taxonomie hiérarchique agissant comme une catégorie pour notre CPT
    $labels = array(
        'name' => 'Moment du repas',
        'new_item_name' => 'Nom du nouveau moment',
    	'add_new_item' => 'Ajouter un nouveau moment',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true,
    );

    register_taxonomy('moment-recettes', 'recettes', $args);

    // Déclaration de la taxonomie non hiérarchique (étiquettes) pour notre CPT
    $labels = array(
        'name' => 'Mots-clés',
        'new_item_name' => 'Nom du nouveau mot-clé',
    	'add_new_item' => 'Ajouter un nouveau mot-clé',
    );
    
    $args = array( 
        'labels' => $labels,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => false,
    );

    register_taxonomy( 'motcle-recettes', 'recettes', $args );
}
add_action( 'init', 'nouveau_CPT' );
