<?php
/*
  Template Name: Page-article
  Template Post Type: post, page, product
*/

get_header();
?>
<div class="container">
    <div class="main">

        <?php

            $args =  array(
                'post-type' => 'articles',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'ordre' => 'DESC'
            );

            $articlequery = new WP_Query($args);

            if ($articlequery->have_posts()) : while ($articlequery->have_posts()) : $articlequery->the_post();
        ?>
            <div class="row mb-5">
                <div class="col-6">
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="col-6" style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>");background-size: cover;'>
                    <h2 class="text-center pt-0"><?php the_title(); ?></h2>
                </div>
            </div>

        <?php
                    endwhile;
                endif;

                wp_reset_postdata();

        ?>
    </div>
</div>

<?php
get_footer();
?>