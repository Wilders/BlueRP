<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location: index.php');
    die();
}
if(!empty($_POST) && !empty($_POST['login']) && !empty($_POST['password'])){
    require_once('../inc/db.php');
    $req = $bdd->prepare('SELECT * FROM users WHERE username = :login');
    $req->execute(['login' => $_POST['login']]);
    $user = $req->fetch();
    if(sha1($_POST['password']) === $user['password']){
        $_SESSION['id'] = $user['id'];
        header('Location: index.php');
        die();
    }else{
        $error = true;
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

<body class="bg-dark">
  <div class="container">
<?php if(isset($error)) { ?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <strong>:(</strong> Login/Mot de passe incorrect
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Connexion</div>
      <div class="card-body">
        <form action="#" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Nom d'utilsateur</label>
            <input class="form-control" name="login" type="text" placeholder="Nom d'utilisateur">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input class="form-control" name="password" type="password" placeholder="Mot de passe">
          </div>
          <button class="btn btn-primary btn-block" type="submit">Connexion</button>
        </form>
      </div>
    </div>
  </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
