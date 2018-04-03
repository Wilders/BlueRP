<?php 
require('inc/db.php');
$news = $bdd->query('SELECT * FROM news ORDER BY id DESC LIMIT 0,1');
?>
<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <meta name="author" content="Wilders.fr">
    <title>BlueRP</title>
    <meta name="description" content="BlueRP: Serveur DarkRP français Garry's Mod">
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/plugins.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="ms-site-container">
      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-white navbar-mode">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">
              <span class="ms-logo ms-logo-sm">B</span>
              <span class="ms-title">Blue<strong>RP</strong></span>
              </span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
              <li class="nav-item"><a href="/" class="nav-link animated fadeIn animation-delay-7">Accueil <i class="fa fa-home"></i></a></li>
              <li class="nav-item"><a href="news.php" class="nav-link animated fadeIn animation-delay-7">Actualités <i class="fa fa-newspaper-o"></i></a></li>
              <li class="nav-item"><a href="donate.php" class="nav-link animated fadeIn animation-delay-7">Faire un don <i class="fa fa-eur"></i></a></li>
              <li class="nav-item"><a href="http://www.blue-rp.fr/forum/" class="nav-link animated fadeIn animation-delay-7">Forum <i class="fa fa-comments-o"></i></a></li>
            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu d-md-none">
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </nav>
      <header class="ms-hero-page ms-hero-video ms-hero-img-bluerp ms-hero-bg-dark-transparent color-white intro-hero-full">
        <div class="intro-hero-full-content">
          <div class="container text-center">
            <span class="ms-logo ms-logo-lg center-block mb-2 mt-2 animated zoomInDown animation-delay-7">B</span>
            <h2 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-7">Blue<span>RP</span> en quelques mots..</h2>
            <h1 class="animated fadeInUp animation-delay-12"><span class="typed-class typed-block color-primary-light"></span></h1>
            <p class="fadeInUp animation-delay-12"><a href="http://steamcommunity.com/groups/blueroleplay" class="btn btn-xlg btn-raised btn-github mr-5" target="_blank"><i class="fa fa-steam"></i>Groupe Steam</a><a href="ts3server://ts.blue-rp.fr" class="btn btn-xlg btn-raised btn-tumblr"><i class="fa fa-headphones"></i>TeamSpeak</a></p>
          </div>
        </div>
      </header>
      <div class="container mt-6">
        <section class="mb-6">
          <h2 class="text-center no-mt mb-2">À propos</h2>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
              <div class="ms-icon-feature">
                <div class="ms-icon-feature-icon">
                  <span class="ms-icon ms-icon-lg ms-icon-inverse">
                    <i class="fa fa-question-circle"></i>
                  </span>
                </div>
                <div class="ms-icon-feature-content">
                  <h4 class="color-primary">Titre #1</h4>
                  <p>Texte #1</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
              <div class="ms-icon-feature">
                <div class="ms-icon-feature-icon">
                  <span class="ms-icon ms-icon-lg ms-icon-inverse">
                    <i class="fa fa-server"></i>
                  </span>
                </div>
                <div class="ms-icon-feature-content">
                  <h4 class="color-primary">Titre #2</h4>
                  <p>Texte #2</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
              <div class="ms-icon-feature">
                <div class="ms-icon-feature-icon">
                  <span class="ms-icon ms-icon-lg ms-icon-inverse">
                    <i class="fa fa-users"></i>
                  </span>
                </div>
                <div class="ms-icon-feature-content">
                  <h4 class="color-primary">Titre #3</h4>
                  <p>Texte #3</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <section class="no-mt mb-6">
        <div class="container">
          <h1 class="text-center no-mt mb-2">Notre équipe</h1>
          <div class="row d-flex justify-content-center">
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="card card-danger">
                <div class="ms-hero-bg-danger ms-hero-img-profile">
                  <img src="img/team3.png" alt="Swann" class="img-avatar-circle"> </div>
                <div class="card-body pt-6 text-center">
                  <h3 class="color-danger">Swann</h3>
                  <p>Fondateur de BlueRP</p>
                  <a href="https://steamcommunity.com/" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-github">
                    <i class="fa fa-steam"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                    <i class="fa fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="card card-info">
                <div class="ms-hero-bg-info ms-hero-img-profile">
                  <img src="img/team3.png" alt="Autre personne" class="img-avatar-circle"> </div>
                <div class="card-body pt-6 text-center">
                  <h3 class="color-info">Autre personne</h3>
                  <p>Administrateur de BlueRP</p>
                  <a href="https://steamcommunity.com/" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-github">
                    <i class="fa fa-steam"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                    <i class="fa fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="card card-danger">
                <div class="ms-hero-bg-danger ms-hero-img-profile">
                  <img src="img/team3.png" alt="Swann" class="img-avatar-circle"> </div>
                <div class="card-body pt-6 text-center">
                  <h3 class="color-danger">Autre personne</h3>
                  <p>Administrateur de BlueRP</p>
                  <a href="https://steamcommunity.com/" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-github">
                    <i class="fa fa-steam"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                    <i class="fa fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="card card-info">
                <div class="ms-hero-bg-info ms-hero-img-profile">
                  <img src="img/team3.png" alt="Autre personne" class="img-avatar-circle"> </div>
                <div class="card-body pt-6 text-center">
                  <h3 class="color-info">Autre personne</h3>
                  <p>Administrateur de BlueRP</p>
                  <a href="https://steamcommunity.com/" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-github">
                    <i class="fa fa-steam"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                    <i class="fa fa-twitter"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <h1 class="text-center no-mt mb-2"> Dernière actualité</h1>
          <div class="row">
            <div class="col-md-12">
<?php while ($data = $news->fetch()) { ?>
            <article class="card card-primary mb-4">
              <div class="card-body card-body-big">
                <div class="row">
<?php if($data['img'] != NULL) { ?>
                  <div class="col-xl-6">
                    <img src="<?= $data['img']; ?>" alt="Image Actualité" class="img-fluid mb-4">
                  </div>
<?php } ?>
                  <div class="col-xl-6 mb-4">
                    <h3 class="no-mt">
                      <a href="news.php?id=<?= $data['id']; ?>"><?= $data['title']; ?></a>
                    </h3>
                    <p><?= $data['description']; ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <span class="ml-1 d-none d-sm-inline"><i class="fa fa-calendar mr-05 color-info"></i><span class="color-medium-dark"> Posté le <?= date("d/m/Y", strtotime($data['date'])); ?></span></span>
                  </div>
                  <div class="col-lg-4 text-right">
                    <a href="news.php?id=<?= $data['id']; ?>" class="btn btn-primary btn-raised btn-block animate-icon">Lire 
                      <i class="ml-1 no-mr fa fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>
<?php } ?>
            </div>
          </div>
        </div>
      </section>
      <footer class="ms-footer">
        <div class="container">
          <p>&copy; 2018 Copyright: <span class="color-primary">Blue</span><strong>RP</strong> | Made by <a href="http://wilders.fr" class="link color-light" target="_blank">Wilders</a> avec Material Style <i class="color-danger fa fa-heart-o"></i></p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised">
          <i class="fa fa-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- Navbar sur monbile :[] -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-title">
            <div class="ms-slidebar-t">
              <span class="ms-logo ms-logo-sm">B</span>
              <h3>Blue<span>RP</span></h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li>
            <a class="link" href="/">
              <i class="fa fa-home"></i> Accueil</a>
          </li>
          <li>
            <a class="link" href="news.php">
              <i class="fa fa-newspaper-o"></i> Actualités</a>
          </li>
          <li>
            <a class="link" href="donate.php">
              <i class="fa fa-eur"></i> Faire un don</a>
          </li>
          <li>
            <a class="link" href="http://www.blue-rp.fr/forum/">
              <i class="fa fa-comments-o"></i> Forum</a>
          </li>
        </ul>
      </div>
    </div>
    <script src="js/plugins.min.js"></script>
    <script src="js/app.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>