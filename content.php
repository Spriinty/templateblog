<!-- start partie trois derniers articles -->
<div class="container pt-5">
    <div class="d-flex mt-2 mb-1">
        <div class="col-2 offset-1 mt-3 border-top"></div>
        <div class="col-6 raleway">
            <h2 class="text-center mb-0">LES TROIS DERNIERS PROJETS</h2>
        </div>
        <div class="col-2 mt-3 border-top"></div>
    </div>

    <div class="d-flex justify-content-around px-0 pt-5 pb-4 lastarticles pb-5">
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

                        <div class="flip-card-front d-flex align-items-center justify-content-center" style='background-image: url("<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"); background-size: cover;'>
                            <h2 class="raleway text-white"><?php the_title(); ?></h2>

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
            <div class="col-4 pl-0 position-relative">
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

<!-- start partie réseaux sociaux -->

<div class="container-fluid">
    <div class="container">
        <div class="row d-flex justify-content-center pt-3 pb-3">
            <ul class='social mb-0 p-0'>
                <li class='facebook'>
                    <a>
                        <i class='fa fa-lg fa-facebook-official'></i>
                    </a>
                </li>
                <li class='instagram'>
                    <a>
                        <i class='fa fa-lg fa-instagram'></i>
                    </a>
                </li>
                <li class='linkedin'>
                    <a>
                        <i class='fa fa-lg fa-linkedin'></i>
                    </a>
                </li>
                <li class='twitter fafatwit'>
                    <a>
                        <i class='fa fa-lg fa-twitter'></i>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>



<!-- end partie réseaux sociaux -->


<div class="container pt-5">
    <div class="row">

        <div class="col-12 pl-0 pr-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2688.4455173375673!2d6.149653515872332!3d47.6369086938766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4792f28ac3c7562f%3A0x428752472fa42de6!2s19%20Rue%20de%20Praley%2C%2070000%20Vesoul!5e0!3m2!1sfr!2sfr!4v1582295236057!5m2!1sfr!2sfr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <!-- end partie trois projets -->

    </div>
</div>

</div>
<div class="container pb-5">
    <div class="row">

    </div>
</div>