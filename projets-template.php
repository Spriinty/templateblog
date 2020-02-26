<?php
/*
  Template Name: Projet-template
  Template Post Type: post, page, product
*/

get_header();
?>

<h2>Les apprenants de la promo 33 de l'ACS à Vesoul</h2>

<?php

// 1. on défini ce que l'on veut
$args = array(
  'post_type' => 'projets',
  'posts_per_page' => -1,
);

// 2. on exécute la query
$my_query = new WP_Query($args);



if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
?>

    <div class="col-12">
      <div class="col-4">
        <p><?php echo get_post_meta($post->ID, '_projets_description', true); ?></p><br>
        <p><?php echo get_post_meta($post->ID, '_projets_liens', true); ?></p>
      </div>
      <div class="col-8">

      </div>
    </div>

<?php
  endwhile;
endif;
// 4. On réinitialise à la requête principale (important)
wp_reset_postdata();

get_footer();
?>