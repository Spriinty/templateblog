<!-- start partie présentation -->

<div class="container-fluid">
    <div class="container">
        <div class="row d-flex mt-5 mb-3">
            <div class="col-2 col-sm-3 col-md-3 col-lg-4 col-xl-4  mt-4 md-2 mt-lg-3 mt-xl-3  border-top"></div>
            <div class="col-8 col-sm-6 col-md-6 col-lg-4 col-xl-4 raleway px-3">
                <h2 class="text-center title-size-h2">PRESENTATION</h2>
            </div>
            <div class="col-2 col-sm-3 col-md-3 col-lg-4 col-xl-4 mt-4 mt-lg-3 mt-xl-3 border-top"></div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
                <p class="lettrine">Bienvenue sur le blog des Gitbreakers! Nous vous présentons la promotion 33 de l'ACS de Vesoul aka Access Code School. Nous sommes 16 développeurs en herbe, mordus de technologies et passionnés par le code.
                </p>
                <p class="lettrine">
                    Après huit mois de formation, des projets réalisés en équipe et des milliers de lignes de code dans les doigts, c'est avec plaisir que nous vous présentons ce blog en vous souhaitant une excellente navigation.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center text-sm-center text-md-center text-lg-right text-xl-right">
                <img class="pt-3 pb-3 img-fluid img-promo" src="<?php echo get_template_directory_uri(); ?>/assets/promo-acs.jpg" alt="logo de la promotion des gitBreakers" />
            </div>
        </div>
    </div>
</div>



<!-- end partie présentation -->

<!-- start partie trois derniers articles -->
<div class="container pt-5">
    <div class="d-flex mt-2 mb-1">
        <div class="col-3 offset-1 mt-5 border-top"></div>
        <div class="col-6 raleway">
            <h2 class="text-center mt-4 title-size-h2 text-separtion">LES TROIS DERNIERS ARTCLES</h2>
        </div>
        <div class="col-3 mt-5 border-top"></div>
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
            ?> <div class="col-12 pt-5 px-sm-0 px-md-0">
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
            <div class="col-3  mt-3 border-top"></div>
            <div class="col-6 raleway">
                <h2 class="text-center title-size-h2">PROJETS</h2>
            </div>
            <div class="col-3 mt-3 border-top"></div>
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


<!-- end partie réseaux sociaux -->


<div class="container py-5">
    <div class="d-flex mt-2 mb-1">
        <div class="col-3  mt-3 border-top py-5"></div>
        <div class="col-6 raleway">
            <h2 class="text-center title-size-h2">Retrouvez-nous</h2>
        </div>
        <div class="col-3 mt-3 border-top"></div>
    </div>
    <div class="row  ">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-0  "">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2688.435154361931!2d6.152140625577409!3d47.63711010050714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4792f28ac3c7562f%3A0x428752472fa42de6!2s19%20Rue%20de%20Praley%2C%2070000%20Vesoul!5e0!3m2!1sfr!2sfr!4v1582808983672!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 px-0 ">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1582808780029!6m8!1m7!1sgRcMh6nY_N-6qqPbNpVtbA!2m2!1d47.63711010050714!2d6.152140625577409!3f283.3220833312668!4f-13.279209380019992!5f0.7820865974627469" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <!-- end partie trois projets -->

</div>
