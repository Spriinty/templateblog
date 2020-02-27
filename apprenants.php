<?php
/*
Template Name: Apprenants
*/

get_header();
?>
<?php
    get_template_part('banniere', get_post_format());
    ?>

<?php

// 1. on défini ce que l'on veut
$args = array(
    'post_type' => 'personnes',
    'posts_per_page' => -1,
    'order' => 'ASC'
);

// 2. on exécute la query
$my_query = new WP_Query($args);
?>
<div class="container-fluid">
    <div class="container">

        <div class="row d-flex flex-wrap mt-5 mb-5">
            <?php
            // 3. on lance la boucle !
            if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
            ?>
                    <div class="col-3 flip-card-apprenants mt-4 mb-2">
                        <div class="flip-card-inner-apprenants">

                            <div class="flip-card-front-apprenants text-center">
                                <div>
                                    <p class="mb-2 pacifico name-apprenants"><?php the_title(); ?></p>
                                </div>
                                <div>
                                    <p><?php the_post_thumbnail(array('class' => "img-fluid")); ?></p>
                                </div>
                            </div>
                            <div class="flip-card-back-apprenants">
                                <div class="d-flex justify-content-center">
                                    <p class="mb-0 mr-2"><a href="<?php echo get_post_meta($post->ID, '_personnes_linkedin', true) ?>"><i class="fa fa-lg fa-linkedin"></i></a></p>
                                    <p class="mb-0 ml-2">
                                        <a href="<?php echo get_post_meta($post->ID, '_personnes_github', true) ?>"><img class="img-fluid logo-github" src="<?php echo get_template_directory_uri(); ?>/assets/github.png" /></a>
                                    </p>
                                </div>
                                <div>
                                    <p><?php the_post_thumbnail(array('class' => "img-fluid")); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            // 4. On réinitialise à la requête principale (important)
            wp_reset_postdata();

            ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>