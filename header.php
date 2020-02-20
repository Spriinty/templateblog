<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- DEBUT META TAGS GOOGLE,FB, TwitterCard -->
    <meta name="robots" content="all">
    <meta name="keywords" content="Blog, Promotion, Promo, ACS, Onlineformapro, Online, forma, pro, ">
    <meta name="name" content="Blog promo 33 ACS OnlineFormaPro">
    <meta name="description" content="Bienvenue sur le blog de la promo 33 de l'Access Code School. Découvrez notre univers à travers nos articles et projets réalisés au cours de ces derniers mois.">

    <!--meta property-->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Blog promo 33 ACS OnlineFormaPro">
    <meta property="og:description" content="Bienvenue sur le blog de la promo 33 de l'Access Code School. Découvrez notre univers à travers nos articles et projets réalisés au cours de ces derniers mois.">
    <meta property="og:site_name" content="Blog promo 33 ACS OnlineFormaPro">
    <meta property="og:image:alt" content="facebook_partage">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Blog promo 33 ACS OnlineFormaPro">
    <meta name="twitter:description" content="Bienvenue sur le blog de la promo 33 de l'Access Code School. Découvrez notre univers à travers nos articles et projets réalisés au cours de ces derniers mois.">
    <meta name="twitter:creator" content="Chahrazedd Durand, Désirée Besnard, Rodrigue Cegelly, Quentin Petrequin">
    <!-- FIN META TAGS GOOGLE,FB, TwitterCard -->

    <title>Bienvenue sur le blog de la promo 33 de l'ACS !</title>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
    <link href="<?php bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
    <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>

</head>

<body>
    <!-- DEBUT BLOC HEADER -->
    <header class="container-fluid bg-dark text-white blog-header">
        <div class="container">
            <h1 class="blog-title"><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
            <p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>
        </div>
        <div class="container">
            <nav id="navigation-principale" role="navigation">
                <a class="active" href="#">Accueil</a>
                <a href="#">Services</a>
                <a href="#">À Propos</a>
                <a href="#">Contact</a>
            </nav>
        </div>
    </header>
    <!-- FIN BLOC HEADER -->