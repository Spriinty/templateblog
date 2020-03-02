<?php
/*
  Template Name: Page-article
  Template Post Type: post, page, product
*/

get_header();
?>
<?php
get_template_part('banniere', get_post_format());
?>

<div class="container raleway">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center py-5"><?php the_title(); ?></h2>
        </div>
    </div>
</div>

<div class="container-fluid raleway">
    <div class="container">
        <div class="main">

            <?php

            $args =  array(
                'post-type' => 'articles',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'ordre' => 'DESC'
            );

            $articlequery = new WP_Query($args);

            if ($articlequery->have_posts()) : while ($articlequery->have_posts()) : $articlequery->the_post();
            ?>
                    <div class="row mb-5 article-height shadow flex-wrap-reverse flex-sm-wrap-reverse flex-md-wrap-reverse">

                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 raleway">
                            <p class="mt-4 font-weight-bold"><?php the_title(); ?></p>
                            <p><?php get_the_excerpt() ; ?>...</p>
                            <div class="btn btn-warning mb-4 mb-sm-4 mb-md-4 mb-lg-0 mb-xl-0"><a class="text-white" href="<?php the_permalink(); ?>">Lire l'article</a></div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 h-image-projets-articles" style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"); background-size: cover; background-position-x:center;'>
                             
                        </div>
                    </div>

            <?php
                endwhile;
            endif;

            wp_reset_postdata();

            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>