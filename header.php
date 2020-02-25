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
  <link href="<?php bloginfo('template_directory'); ?>/css/apprenants.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>

</head>

<body>

  <ul class='social mb-0'>
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

  <div class="container ">
    <div class="row">
      <div class="col d-flex justify-content-center mb-4">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="logo de la promotion des gitBreakers" />
      </div>
    </div>
  </div>

  <div class="container pb-3 pl-0 pr-0">

    <nav class="navbar navbar-expand-lg navbar-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e('Toggle Navigation', 'theme-textdomain'); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-content">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_id'        => 'Primary',
          'container'      => false,
          'depth'          => 2,
          'menu_class'     => 'navbar-nav w-100 justify-content-between',
          'walker'         => new Bootstrap_NavWalker(),
          'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
        ));
        ?>
      </div>
    </nav>

  </div>


  <!-- DEBUT BLOC HEADER -->
  <header class="container bg-lol text-white blog-header">

    <div class="row p-5">
      <div class="col-12 pl-0 text-center">
        <h4 class="titre_header">Gitbreakers</h4>
      </div>
    </div>


  </header>
  <!-- FIN BLOC HEADER -->