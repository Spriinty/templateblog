<?php
register_nav_menus( array(
'menu-principal' => 'Menu principal'
) );



/*
* On utilise une fonction pour créer notre custom post type 'Personnes'
*/
add_theme_support( 'post-thumbnails' );
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
        'description'         => __('Tout tout tout'),
        'labels'              => $labels,
        'menu_icon'      => 'dashicons-id-alt',
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un âge etc...)
        'supports'            => array('title','thumbnail'),
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

    // retrieve the _personnes_age current value
    $current_age = get_post_meta($post->ID, '_personnes_age', true);

    $villes = get_post_meta($post->ID, '_personnes_ville', true);
    

?>
    <div class='inside'>
        <h3><?php _e('age', 'personnes_example_plugin'); ?></h3>
        <p>
            <input type="text" name="age" value="<?php echo $current_age; ?>" />
        </p>
        <h3><?php _e('ville', 'personnes_example_plugin'); ?></h3>
        <p>
            <input type="text" name="ville" value="<?php echo $villes; ?>" />
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
function personnes_save_meta_box_data( $post_id ){
	// verify taxonomies meta box nonce
	if ( !isset( $_POST['personnes_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['personnes_meta_box_nonce'], basename( __FILE__ ) ) ){
		return;
	}

	// return if autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
		return;
	}

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ){
		return;
	}

	// store custom fields values
	// age string
	if ( isset( $_REQUEST['age'] ) ) {
		update_post_meta( $post_id, '_personnes_age', sanitize_text_field( $_POST['age'] ) );
	}
	
	// store custom fields values
	// ville string
	if ( isset( $_REQUEST['ville'] ) ) {
		update_post_meta( $post_id, '_personnes_ville', sanitize_text_field( $_POST['ville'] ) );
    }
}
add_action( 'save_post_personnes', 'personnes_save_meta_box_data' );