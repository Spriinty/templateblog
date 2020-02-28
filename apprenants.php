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

        <div class="row d-flex mt-5 mb-3 pt-5">
            <div class="col-2 col-sm-3 col-md-3 col-lg-4 col-xl-4  mt-4 md-2 mt-lg-3 mt-xl-3  border-top"></div>
            <div class="col-8 col-sm-6 col-md-6 col-lg-4 col-xl-4 raleway px-3">
                <h2 class="text-center title-size-h2">LES GITBREAKERS</h2>
            </div>
            <div class="col-2 col-sm-3 col-md-3 col-lg-4 col-xl-4 mt-4 mt-lg-3 mt-xl-3 border-top"></div>
        </div>

        <div class="row d-flex flex-wrap mt-5 mb-5">
            <?php
            // 3. on lance la boucle !
            if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
            ?>
                    <div class="col-6 col-sm-3 flip-card-apprenants mt-sm-4 mb-sm-2">
                        <div class="flip-card-inner-apprenants">

                            <div class="flip-card-front-apprenants text-center">
                                <div>
                                    <p class="mt-3 mb-0 mt-sm-0 mb-sm-2 raleway name-apprenants"><?php the_title(); ?></p>
                                </div>
                                <div>
                                    <p><?php the_post_thumbnail(array('class' => "img-fluid avatar")); ?></p>
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
                                    <p><?php the_post_thumbnail(array('class' => "img-fluid avatar")); ?></p>
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