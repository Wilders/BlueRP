<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: login.php');
    die();
}
require('../inc/db.php');
if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['text']) && isset($_POST['img'])) {
    if(empty($_POST['title']) OR empty($_POST['description']) OR empty($_POST['text'])) {
        $errors['emptyone'] = "Un des champs est vide";
    }
    if(empty($errors)){
        $req = $bdd->prepare("INSERT INTO news (title, description, text, img) VALUES (?, ?, ?, ?)");
        $req->execute([$_POST['title'], $_POST['description'], $_POST['text'], $_POST['img']]);
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>BlueRP <- Adm</title>
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin.css" rel="stylesheet">
   </head>
   <body class="fixed-nav bg-dark" id="page-top">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
         <a class="navbar-brand" href="/">BlueRP</a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                  <a class="nav-link" href="index.php">
                  <i class="fa fa-fw fa-newspaper-o"></i>
                  <span class="nav-link-text">News</span>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
               <li class="nav-item">
                  <a class="nav-link text-center" id="sidenavToggler">
                  <i class="fa fa-fw fa-angle-left"></i>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link" href="logout.php">
                  <i class="fa fa-fw fa-sign-out"></i>Déconnexion</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="content-wrapper">
         <div class="container-fluid">
          <form action="" method="post">
            <div class="block-content block-content-full">
               <div class="form-group row">
                  <label class="col-12" for="title">Titre</label>
                  <div class="col-12">
                     <input type="text" class="form-control" name="title" placeholder="Titre de la news">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-12" for="description">URL Image</label>
                  <div class="col-12">
                     <input type="text" class="form-control" name="img" placeholder="Lien direct sur l'image">
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-12" for="description">Petite description</label>
                  <div class="col-12">
                     <textarea class="form-control" name="description" placeholder="Description visible sur la preview de la news" rows="2"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <label class="col-12">Texte de la news</label>
                  <div class="col-12">
                     <textarea class="form-control" name="text" placeholder="News" rows="8"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-12">
                     <button type="submit" class="btn btn-alt-primary">Créer la news</button>
                  </div>
               </div>
            </div>
          </form>
         </div>
         <!-- Scroll to Top Button-->
         <a class="scroll-to-top rounded" href="#page-top">
         <i class="fa fa-angle-up"></i>
         </a>
         <!-- Bootstrap core JavaScript-->
         <script src="vendor/jquery/jquery.min.js"></script>
         <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
         <!-- Core plugin JavaScript-->
         <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      </div>
   </body>
</html>