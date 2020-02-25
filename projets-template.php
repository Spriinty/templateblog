<?php
/*
  Template Name: Projet-template
  Template Post Type: post, page, product
*/

get_header();
?>


<div class="container">
  <div class="main">

    <?php

    // 1. on défini ce que l'on veut
    $args = array(
      'post_type' => 'projets',
      'posts_per_page' => -1,
    );

    // 2. on exécute la query
    $my_query = new WP_Query($args);

    // 3. on lance la boucle !
    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
    ?>

        <div class="col-12 text-center">
      <?php the_title();

      endwhile;
    endif;

    // 4. On réinitialise à la requête principale (important)
    wp_reset_postdata();

    get_footer();
      ?>
        </div>
  </div>
</div>