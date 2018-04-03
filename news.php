<?php 
require('inc/db.php');
$news = $bdd->query('SELECT * FROM news ORDER BY id DESC LIMIT 0,5');
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
  $checkid = $bdd->prepare('SELECT * FROM news WHERE id = :id');
  $checkid->bindParam(':id', $_GET['id']);
  $checkid->execute();
  if($checkid->rowCount() > 0) {
    $newsdata = $checkid->fetch();
  } else {
    header('Location: index.php');
    die();
  }
}
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
    <link rel="stylesheet" type="text/css" href="http://govicons.io/css/govicons.css">
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
<?php if(!isset($_GET['id'])) { ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
<?php while ($data = $news->fetch()) { ?>
            <article class="card mb-4">
              <div class="card-body">
                <div class="row">
<?php if($data['img'] != NULL) { ?>
                  <div class="col-xl-6">
                    <img src="<?= $data['img']; ?>" alt="Image Actualité" class="img-fluid mb-4">
                  </div>
<?php } ?>
                  <div class="col-xl-6">
                    <h3 class="no-mt">
                      <a href="news.php?id=<?= $data['id']; ?>"><?= $data['title']; ?></a>
                    </h3>
                    <p class="mb-4"><?= $data['description']; ?></p>
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
<?php } if(isset($newsdata)) { ?>
<div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body card-body-big">
                <h1 class="no-mt"><?= $newsdata['title']; ?></h1>
                <div class="mb-4">
                  <span class="ml-1 d-none d-sm-inline"><span class="text-muted"><?= $newsdata['description']; ?></span></span>
                </div>
                <img src="<?= $newsdata['img']; ?>" alt="Image de l'actualité" class="img-fluid mb-4">
                <p><?= $newsdata['text']; ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-widgets"></i> Acualité n°<?= $newsdata['id']; ?></h3>
              </div>
              <div class="card-body">
                <p>Vous lisez actuellement l'actualité n°<?= $newsdata['id']; ?>.</p>
                <p>Elle a été postée le <?= date("d/m/Y", strtotime($newsdata['date'])); ?> à <?= date("H:i", strtotime($newsdata['date'])); ?>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php } ?>
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
  </body>
</html>