<?php 
    get_header();
    get_template_part('banniere', get_post_format());
?>

<div class="container raleway">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2 pb-5">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <h2 class="text-center py-5 "><?php the_title(); ?></h2>
            <div class="text-justify ">
                <?php the_content(); ?>
            </div>
            <p class="pt-5 raleway">Rédigé par : <span class="font-family-pacifito"><?php the_author(); ?></span></p>
    <?php endwhile;
    else : ?>
            <div class="main">
<?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>