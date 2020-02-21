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
                <div class="flip-card-inner">

                    <div class="flip-card-front">
                        <h2><?php the_title(); ?></h2>  
                    </div>
                
                    <div class="flip-card-back text-black">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_category(); ?></p>

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