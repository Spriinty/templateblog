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
            <div class="row mb-5 article-height shadow">

                <div class="col-4">
                    <p><?php the_excerpt(); ?></p>
                    <p><a href="<?php the_permalink();?>">Lien vers l'article "<?php the_title(); ?>"</a></p>
                </div>

                <div class="col-8" style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>");background-size: cover;'>
                    <h2 class="text-center d-flex h-100 justify-content-center align-items-center"><?php the_title(); ?></h2>
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