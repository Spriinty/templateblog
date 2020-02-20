<?php get_header(); ?>
<!-- DEBUT BLOC CONTENT -->
<div class="container">
    <div class="row">
        <?php
                get_template_part('content', get_post_format());
        ?>
    </div> <!-- /.blog-main -->
</div> <!-- /.row -->
</div>
<!-- FIN BLOC CONTENT -->
<?php get_footer(); ?>