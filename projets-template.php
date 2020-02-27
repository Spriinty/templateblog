<?php
/*
  Template Name: Projet-template
  Template Post Type: post, page, product
*/

get_header();
?>

<h2>Les apprenants de la promo 33 de l'ACS à Vesoul</h2>

<<<<<<< HEAD
<?php

// 1. on défini ce que l'on veut
$args = array(
  'post_type' => 'projets',
  'posts_per_page' => -1,
);
=======
<div class="container p-0">
  <div class="main">
    <div class="row mt-5">
    <div class="col-4 mt-3 border-top"></div>
      <div class="col-4 text-center">
        <h2>TOUS NOS PROJETS</h2>
      </div>
      <div class="col-4 mt-3 border-top"></div>
    </div>
>>>>>>> 8622e53b14f45b59c61327a1c798418580108875

// 2. on exécute la query
$my_query = new WP_Query($args);



<<<<<<< HEAD
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
=======
    // 3. on lance la boucle !
    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
    ?>
        <div class="row pt-5">
          <div class="col-4 text-center pt-5 pb-5">
            <h2><?php the_title(); ?></h2>
            <p class="text-break"><?php echo get_post_meta($post->ID, '_projets_description', true); ?></p><br>
        <p><?php echo get_post_meta($post->ID, '_projets_link', true); ?></p>
            <!-- <h3><strong>Description:</strong></h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, nisi explicabo nemo velit illo dolorem aut amet ratione similique, dolores, perspiciatis assumenda distinctio fugiat. Ea architecto autem aut incidunt ipsum?</p> -->
          </div>

          <div class="col-8" style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"); background-size: cover; background-position-y: center;'></div>
          </div>
      <?php
      endwhile;
    endif;


    // 4. On réinitialise à la requête principale (important)
    wp_reset_postdata();

      ?>
        
  </div>
</div>

>>>>>>> 8622e53b14f45b59c61327a1c798418580108875
