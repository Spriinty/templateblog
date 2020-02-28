<?php
/*
  Template Name: Projets
  Template Post Type: page
*/
get_header();
?>

<?php
get_template_part('banniere', get_post_format());
?>


<div class="container p-0 pb-5">
  <div class="main">
    <div class="row mt-5">
    <div class="col-4 mt-3 border-top"></div>
      <div class="col-4 text-center">
        <h2>TOUS NOS PROJETS</h2>
      </div>
      <div class="col-4 mt-3 border-top"></div>
    </div>
    </div>

    <div class="container-fluid">
      <div class="container">
    <?php

    // 1. on défini ce que l'on veut
    $args = array(
      'post_type' => 'projets',
      'posts_per_page' => -1,
    );

    // 2. on exécute la query
    $my_query = new WP_Query($args);
    $i = 0;
    // 3. on lance la boucle !
    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
    ?>
      
        <div class="row mt-5 shadow flex-wrap-reverse flex-sm-wrap-reverse">
          <div class="col-12 col-sm-12 col-lg-4 text-center pt-3 pb-3 pt-sm-3 pb-sm-3 pt-md-5 pb-md-5 pt-md-5" >
            <h2><?php the_title(); ?></h2>
            <p id="demo<?php echo $i ?>" class="text-break collapse"><?php echo get_post_meta($post->ID, '_projets_description', true); ?></p><br>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo<?php echo $i ?>">Description</button><br>
            <p class="col-12 pt-3"><a href="<?php echo get_post_meta($post->ID, '_projets_link', true); ?>"><img class="img-fluid icon-projet" src="<?php echo get_template_directory_uri(); ?>/assets/monitor.png" /></a></p>

          </div>

          <div class="col-12 col-sm-12 col-md-8 col-lg-8 h-image-projets-articles" style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"); background-size: cover; background-position-y: center;'></div>
        </div>
      

      <?php
      $i++;
      endwhile;
    endif;


    // 4. On réinitialise à la requête principale (important)
    wp_reset_postdata();

      ?>
      </div>
    </div>    
  </div>
</div>

<!-- FIN BLOC CONTENT -->
<?php get_footer(); ?>