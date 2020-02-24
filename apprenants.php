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

                        echo '<div class="col-4 text-center">
                            <p>';
                            the_title();
                            echo '</p>';

                            echo '<p>';
                            the_post_thumbnail();
                            echo '</p>';

                            echo '<p><a href="' . get_post_meta($post->ID, '_personnes_linkedin', true) . '" target="_blank">Linkedin</a></p>';
                            echo '<p><a href="' . get_post_meta($post->ID, '_personnes_portfolio', true) . '" target="_blank">Portfolio</a></p>
                        </div>';
                    
            endwhile;
        endif;
    echo '</div>
</div>';

// 4. On réinitialise à la requête principale (important)
wp_reset_postdata();

?>

