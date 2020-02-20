<?php
/*
  Template Name: Article
  Template Post Type: post, page, product
*/
	get_header();
?>
	<h1><?php the_title(); ?></h1>
    <div class="main">
      <div class="d-flex justify-content-between lastarticles">
        
        <?php
        
          $args =  array(
            'post-type' => 'articles',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'ordre' => 'DESC'
          );

          $articlequery = new WP_Query($args);

          if($articlequery->have_posts()) : while ($articlequery->have_posts() ) : $articlequery->the_post();

              echo '<div><a href="#">';
              the_title();
              echo '</a></div>';

            endwhile;
          endif;

          wp_reset_postdata();

        ?>

      </div>
    </div>
<?php
	get_footer();
?>