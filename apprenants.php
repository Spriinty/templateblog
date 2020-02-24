<?php
/*
Template Name: Apprenants
*/

// Votre code ici

get_header();
?>

<h2>Les apprenants de la promo 33 de l'ACS à Vesoul</h2>

<?php

// 1. on défini ce que l'on veut
$args = array(
    'post_type' => 'personnes',
    'posts_per_page' => -1,
);

// 2. on exécute la query
$my_query = new WP_Query($args);
echo '<div class="container">
        <div class="row">';
// 3. on lance la boucle !
if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
?>

        <div class="col-3 text-center">
            <p><?php the_title(); ?></p>
            <p><?php the_post_thumbnail(array('class' => "img-fluid")); ?></p>
            <div class="d-flex">
                <p><a href="' . get_post_meta($post->ID, '_personnes_linkedin', true) . '" target="_blank"><i class="fa fa-lg fa-linkedin"></i></a></p>
                <p>
                    <a href="' . get_post_meta($post->ID, '_personnes_portfolio', true) . '" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/github.png"/></a>
                </p>
            </div>
        </div>

<?php
    endwhile;
endif;
// 4. On réinitialise à la requête principale (important)
wp_reset_postdata();

?>