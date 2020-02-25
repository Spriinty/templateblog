<!-- start partie trois derniers articles -->
<div class="container d-flex justify-content-between px-0 pt-5 pb-4 lastarticles pb-5">

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
<div class="container-fluid section-projet">

    <div class="container  pt-5  px-5">
        <div class="row ">
            <div class="col-12 text-center">
                <h1 class="titre-projet pb-5 m-0">Projets</h1>
            </div>
        </div>
        <div class="row ">
            <div class="col-4 position-relative">
                <div class="pr-2 left-projet">
                    <div class="div-hover-text position-absolute">
                        <div class="text-hover"><a class="text-decoration-none text-white" href="https://desireeb.promo-vesoul33.codeur.online/kingburger/"><i class="fa fa-link text-hover " aria-hidden="true"></i> BURGER</a></div>
                    </div>
                </div>
            </div>

            <div class="col-8 right-projet pr-0">
                <div class="col-12 right-up position-relative">
                    <div class="div-hover-text position-absolute">
                        <div class="text-hover"> <a class="text-decoration-none text-white" href="https://quentinp364.promo-vesoul33.codeur.online/automotive/index.html"><i class="fa fa-link text-hover " aria-hidden="true"></i>Automotive </a></div>
                    </div>
                </div>
                <div class="col-12 right-down position-relative ">
                    <div class="div-hover-text position-absolute">
                        <div class="text-hover"><a class="text-decoration-none text-white" href=""><i class="fa fa-link text-hover p-3" aria-hidden="true"></i>CINÉ </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pt-5">
    <div class="row">

    <div class="col-12 pl-0 pr-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2688.4455173375673!2d6.149653515872332!3d47.6369086938766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4792f28ac3c7562f%3A0x428752472fa42de6!2s19%20Rue%20de%20Praley%2C%2070000%20Vesoul!5e0!3m2!1sfr!2sfr!4v1582295236057!5m2!1sfr!2sfr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-6">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Objet</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Objet">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Message</label>
                    <textarea type="text" class="form-control" id="inputAddress2" placeholder="Entrez Votre message "></textarea>
                </div>
                <div class=" text-center p-3">
                    <button type="submit" class="btn btn-primary ">Sign in</button></div>
            </form>
        </div>


        <!-- end partie trois projets -->
       
    </div>
</div>

</div>
<div class="container pb-5">
    <div class="row">

    </div>
</div>