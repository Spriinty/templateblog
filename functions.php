<?php

function navigation_menu() {
    register_nav_menu('menu_principal',__( 'Menu principal' ));
  }
add_action( 'init', 'navigation_menu' );

add_theme_support('post-thumbnails');

/*
* On utilise une fonction pour créer notre custom post type 'Personnes'
*/

function wpm_custom_post_type()
{

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Personnes', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Personne', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Personnes'),
        // Les différents libellés de l'administration
        'all_items'           => __('Toutes les personnes'),
        'view_item'           => __('Voir les personnes'),
        'add_new_item'        => __('Ajouter une nouvelle personne'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer un profil'),
        'update_item'         => __('Modifier un profil'),
        'search_items'        => __('Rechercher une personne'),
        'not_found'           => __('Personne non trouvée'),
        'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label'               => __('Personnes'),
        'description'         => __('Toutes les personnes de la promo 33 de Vesoul à OnlineFormaPro'),
        'labels'              => $labels,
        'menu_icon'      => 'dashicons-id-alt',
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un âge etc...)
        'supports'            => array('title', 'thumbnail'),
        /* 
		* Différentes options supplémentaires
		*/
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'personnes'),

    );

    // On enregistre notre custom post type qu'on nomme ici "personnes" et ses arguments
    register_post_type('personnes', $args);
}

add_action('init', 'wpm_custom_post_type', 0);


/**
 * Add meta box
 *
 * @param post $post The post object
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/add_meta_boxes
 */
function personnes_add_meta_boxes($post)
{
    add_meta_box('personnes_meta_box', __('personnes', 'personnes_example_plugin'), 'personnes_build_meta_box', 'personnes', 'normal', 'low');
}

add_action('add_meta_boxes_personnes', 'personnes_add_meta_boxes');

function personnes_build_meta_box($post)
{
    // make sure the form request comes from WordPress
    wp_nonce_field(basename(__FILE__), 'personnes_meta_box_nonce');

    // retrieve the _personnes_nom current value
    // $current_nom = get_post_meta($post->ID, '_personnes_nom', true);

    // retrieve the _personnes_linkedin current value
    $linkedin = get_post_meta($post->ID, '_personnes_linkedin', true);

    $portfolio = get_post_meta($post->ID, '_personnes_portfolio', true);


?>
    <div class='inside'>
        <h3><?php _e('linkedin', 'personnes_example_plugin'); ?></h3>
        <p>
            <input type="text" name="linkedin" value="<?php echo $linkedin; ?>" />
        </p>
        <h3><?php _e('portfolio', 'personnes_example_plugin'); ?></h3>
        <p>
            <input type="text" name="portfolio" value="<?php echo $portfolio; ?>" />
        </p>
    </div>
<?php
}

/**
 * Store custom field meta box data
 *
 * @param int $post_id The post ID.
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/save_post
 */
function personnes_save_meta_box_data($post_id)
{
    // verify taxonomies meta box nonce
    if (!isset($_POST['personnes_meta_box_nonce']) || !wp_verify_nonce($_POST['personnes_meta_box_nonce'], basename(__FILE__))) {
        return;
    }

    // return if autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions.
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // store custom fields values
    // age string
    if (isset($_REQUEST['linkedin'])) {
        update_post_meta($post_id, '_personnes_linkedin', sanitize_text_field($_POST['linkedin']));
    }

    // store custom fields values
    // ville string
    if (isset($_REQUEST['portfolio'])) {
        update_post_meta($post_id, '_personnes_portfolio', sanitize_text_field($_POST['portfolio']));
    }
}
add_action('save_post_personnes', 'personnes_save_meta_box_data');

// start custom post type projets

function projets_custom_post_type()
{

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x('Projets', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x('Projet', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __('Projets'),
        // Les différents libellés de l'administration
        'all_items'           => __('Tous les projets'),
        'view_item'           => __('Voir les projets'),
        'add_new_item'        => __('Ajouter un nouveau projet'),
        'add_new'             => __('Ajouter'),
        'edit_item'           => __('Editer un projet'),
        'update_item'         => __('Modifier un projet'),
        'search_items'        => __('Rechercher un projet'),
        'not_found'           => __('Projet non trouvé'),
        'not_found_in_trash'  => __('Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label'               => __('Projets'),
        'description'         => __('3 projet de la promotion 33 des Gitbreakers'),
        'labels'              => $labels,
        'menu_icon'      => 'dashicons-id-alt',
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un âge etc...)
        'supports'            => array('title', 'thumbnail'),
        /* 
		* Différentes options supplémentaires
		*/
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => 'projets'),

    );

    // On enregistre notre custom post type qu'on nomme ici "personnes" et ses arguments
    register_post_type('projets', $args);
}

add_action('init', 'projets_custom_post_type', 0);


/**
 * Ajout de la métabox projet
 *
 * @param post $post The post object
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/add_meta_boxes
 */
function projets_add_meta_boxes($post)
{
    add_meta_box('projets_meta_box', __('projets', 'projets_example_plugin'), 'projets_build_meta_box', 'projets', 'normal', 'low');
}

add_action('add_meta_boxes_projets', 'projets_add_meta_boxes');

function projets_build_meta_box($post)
{
    // make sure the form request comes from WordPress
    wp_nonce_field(basename(__FILE__), 'projets_meta_box_nonce');

    $projetlink = get_post_meta($post->ID, '_projets_link', true);




?>
    <div class='inside'>
        <h3><?php _e('link', 'projets_example_plugin'); ?></h3>
        <p>
            <input type="text" name="link" value="<?php echo $projetlink; ?>" />
        </p>
    </div>
<?php
}

/**
 * Store custom field meta box data
 *
 * @param int $post_id The post ID.
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/save_post
 */
function projets_save_meta_box_data($post_id)
{
    // verify taxonomies meta box nonce
    if (!isset($_POST['projets_meta_box_nonce']) || !wp_verify_nonce($_POST['projets_meta_box_nonce'], basename(__FILE__))) {
        return;
    }

    // return if autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions.
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // store custom fields values
    // age string
    if (isset($_REQUEST['link'])) {
        update_post_meta($post_id, '_projets_link', sanitize_text_field($_POST['link']));
    }

}
add_action('save_post_projets', 'projets_save_meta_box_data');

// end custom post type personnes
