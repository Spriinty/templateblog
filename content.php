<!-- start partie trois derniers articles -->
<div class="container d-flex justify-content-between lastarticles">

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

            <div class="flip-card">
                <div class="flip-card-inner" style='background-image: url("<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"); background-size: cover;'>

                    <div class="flip-card-front">
                        <h2><?php the_title(); ?></h2>
                       

                    </div>
                
                    <div class="flip-card-back text-black">
                        <!-- le titre -->
                        <h2><?php the_title(); ?></h2>
                        <!-- l'extrait -->
                        <p><?php the_excerpt(); ?></p>
                        <!-- la catégorie -->
                        <p>
                            <?php foreach ((get_the_category()) as $category)
                                {echo '<ul class="list-unstyled"><li><a href="#">' . $category->cat_name . '</a></li></ul> ';} 
                            ?>
                        </p>
                        <p>
                            <?php get_post_thumbnail_id();?>
                        </p>


                    </div>
                </div>
            </div>

    <?php
        endwhile;
    endif;

    wp_reset_postdata();

    ?>

</div>
<div class="blog-post">
    <p class="blog-post-meta"><?php the_date(); ?> par <a href="#"><?php the_author(); ?></a></p>
    <?php the_content(); ?>
</div><!-- /.blog-post -->