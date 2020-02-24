<!-- start partie trois derniers articles -->
<div class="container d-flex justify-content-between px-0 pt-5 pb-4 lastarticles">

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

                    <div class="flip-card-front" style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"); background-size: cover;'>
                        <h2><?php the_title(); ?></h2>


                    </div>
                    <div class="flip-card-back text-black">
                        <!-- le titre -->
                        <h2><?php the_title(); ?></h2>
                        <!-- l'extrait -->
                        <p><?php the_excerpt(); ?></p>
                        <p><a class="text-decoration-none" href="<?php echo get_post_permalink() ?>">Lire l'article</a></p>
                        <!-- la catégorie -->
                        <p>
                            <?php foreach ((get_the_category()) as $category) {
                                echo '<ul class="list-unstyled"><li><a class="text-decoration-none" href="#">' . $category->cat_name . '</a></li></ul> ';
                            }
                            ?>
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
<!-- end partie trois derniers articles -->

<!-- start partie trois projets -->
<div class="container pt-4 pb-5">
    <div class="row">
        <div class="col-4 left-projet position-relative">
            <div class="div-hover-text position-absolute">
                <div class="text-hover"><a class="text-decoration-none text-white" href=""> Voir le projet</a></div>
            </div>
        </div>

        <div class="col-8 right-projet pr-0">
            <div class="col-12 right-up position-relative">
                <div class="div-hover-text position-absolute">
                    <div class="text-hover"><a class="text-decoration-none text-white" href=""> Voir le projet</a></div>
                </div>
            </div>
            <div class="col-12 right-down position-relative">
                <div class="div-hover-text position-absolute">
                    <div class="text-hover"><a class="text-decoration-none text-white" href=""> Voir le projet</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end partie trois projets -->
<div class="container p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2688.4455173375673!2d6.149653515872332!3d47.6369086938766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4792f28ac3c7562f%3A0x428752472fa42de6!2s19%20Rue%20de%20Praley%2C%2070000%20Vesoul!5e0!3m2!1sfr!2sfr!4v1582295236057!5m2!1sfr!2sfr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>


</div>
<div class="container">
    <div class="row">
        <p class="blog-post-meta"><?php the_date(); ?> par <a href="#"><?php the_author(); ?></a></p>
        <?php the_content(); ?>
    </div>
</div><!-- /.blog-post -->