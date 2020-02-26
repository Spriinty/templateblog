<!-- start partie présentation -->

<div class="container-fluid">
    <div class="container">
        <div class="row d-flex mt-5 mb-3">
            <div class="col-4 mt-3 border-top"></div>
            <div class="col-4 raleway">
                <h2 class="text-center">PRESENTATION</h2>
            </div>
            <div class="col-4 mt-3 border-top"></div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-6 px-5">
                <p class="lettrine">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis quidem maxime, voluptates accusantium officiis eum, hic praesentium ad laborum animi veniam inventore at odio atque recusandae voluptatem? Quod, recusandae cum!</p>
                <p class="lettrine">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, hic. Quibusdam laboriosam neque tenetur id sed blanditiis animi, odio, nisi sunt quae, omnis molestias molestiae minima explicabo error? Nobis, officia.</p>
            </div>
            <div class="col-6">
                <img class="pt-3 pb-3 img-fluid img-promo" src="<?php echo get_template_directory_uri(); ?>/assets/promo-acs.jpg" alt="logo de la promotion des gitBreakers" />
            </div>
        </div>
    </div>
</div>

<!-- end partie présentation -->

<!-- start partie trois derniers articles -->
<div class="container pt-5">
    <div class="d-flex mt-2 mb-1">
        <div class="col-2 offset-1 mt-3 border-top"></div>
        <div class="col-6 raleway">
            <h2 class="text-center mb-0">LES TROIS DERNIERS ARTCLES</h2>
        </div>
        <div class="col-2 mt-3 border-top"></div>
    </div>

    <div class="d-block">
        <div class="row">
            <div class="col"></div>
        </div>
    </div>

    <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
        <div class="d-flex justify-content-between px-0 pt-5 pb-4 lastarticles pb-5">
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

                    <div class="flip-card d-none d-sm-none d-md-none d-lg-block d-xl-block">
                        <div class="flip-card-inner">

                            <div class="flip-card-front d-flex align-items-center justify-content-center" style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"); background-size: cover;'>
                                <h2 class="raleway text-white"><?php the_title(); ?></h2>

                            </div>
                            <div class="flip-card-back text-black d-flex justify-content-center align-items-center">
                                <div>
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
                    </div>
            <?php
                endwhile;
            endif;

            wp_reset_postdata();

            ?>
        </div>
    </div>


    <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <div class="row">
            <?php
            $args =  array(
                'post-type' => 'articles',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'ordre' => 'DESC'
            );

            $articlequery = new WP_Query($args);

            if ($articlequery->have_posts()) : while ($articlequery->have_posts()) : $articlequery->the_post();
            ?> <div class="col-12 pt-5 px-0">
                        <div class="border shadow">
                            <div style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"); background-size: cover; background-position:center; height:40vh; width: 100%;'></div>
                            <div class="p-3">
                                <h2><?php the_title(); ?></h2>
                            <!-- l'extrait -->
                            <p><?php the_excerpt(); ?></p>
                            <p><a class="text-decoration-none" href="<?php echo get_post_permalink() ?>">Lire l'article</a></p>
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





<!-- end partie trois derniers articles -->

<!-- partie présentation des projet -->
<div class="container-fluid">
    <div class="container pt-5 px-5">
        <div class="d-flex mt-2 mb-1">
            <div class="col-4 offset-1 mt-3 border-top"></div>
            <div class="col-2 raleway">
                <h2 class="text-center">PROJETS</h2>
            </div>
            <div class="col-4 mt-3 border-top"></div>
        </div>
    </div>
</div>

<!-- end presentation des projets -->




<!-- start partie trois projets -->
<div class="container-fluid section-projet pt-5 pb-5">

    <div class="container">
        <div class="row ">
            <div class=" col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 px-0 pr-lg-4 pr-xl-4 position-relative">
                <div class="pr-2 left-projet">
                    <div class="div-hover-text position-absolute w-100">
                        <div class="text-hover"><a class="text-decoration-none text-white" href="https://desireeb.promo-vesoul33.codeur.online/kingburger/"><i class="fa fa-link text-hover  p-2 " aria-hidden="true"></i>Burger</a></div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 right-projet  px-0">
                <div class="col-12  right-up position-relative">
                    <div class="div-hover-text position-absolute w-100">
                        <div class="text-hover"> <a class="text-decoration-none text-white" href="https://quentinp364.promo-vesoul33.codeur.online/automotive/index.html"><i class="fa fa-link text-hover p-3" aria-hidden="true"></i>Automotive</a></div>
                    </div>
                </div>
                <div class="col-12 right-down position-relative ">
                    <div class="div-hover-text position-absolute w-100">
                        <div class="text-hover"><a class="text-decoration-none text-white" href=""><i class="fa fa-link text-hover p-3" aria-hidden="true"></i>Ciné </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start partie réseaux sociaux -->

<div class="container-fluid">
    <div class="container-header-reseaux bg-nude py-5">
        <div class="row fa-shadow">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-contact pb-3 pb-sm-3 pb-md-3 pb-lg-0 pb-xl-0">
                <h2>Retrouvez-nous sur les réseaux</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <ul class='social justify-content-end mb-0 h-100 align-items-center'>
                    <li class='facebook  px-3'>
                        <a>
                            <i class='fa fa-lg fa-facebook-official'></i>
                        </a>
                    </li>
                    <li class='instagram px-3 fa-shadow'>
                        <a>
                            <i class='fa fa-lg fa-instagram'></i>
                        </a>
                    </li>
                    <li class='linkedin px-3 fa-shadow'>
                        <a>
                            <i class='fa fa-lg fa-linkedin'></i>
                        </a>
                    </li>
                    <li class='twitter fafatwit px-3 fa-shadow'>
                        <a>
                            <i class='fa fa-lg fa-twitter'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<!-- end partie réseaux sociaux -->


<div class="container pt-5">
    <div class="row">

        <div class="col-12 pl-0 pr-0 pb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2688.4455173375673!2d6.149653515872332!3d47.6369086938766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4792f28ac3c7562f%3A0x428752472fa42de6!2s19%20Rue%20de%20Praley%2C%2070000%20Vesoul!5e0!3m2!1sfr!2sfr!4v1582295236057!5m2!1sfr!2sfr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <!-- end partie trois projets -->

    </div>
</div>