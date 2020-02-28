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

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center py-5"><?php the_title(); ?></h2>
        </div>
    </div>
</div>

<div class="container-fluid">
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
                            <p><?php the_excerpt(); ?></p>
                            <p><a href="<?php the_permalink(); ?>">Lien vers l'article "<?php the_title(); ?>"</a></p>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 h-image-projets-articles" style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>");background-size: cover;'>
                             <div class="w-50 m-auto">
                                <h2 class="font-family-pacifito text-center mt-5 px-5 py-3 bg-mid-white"><?php the_title(); ?></h2>
                            </div>
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