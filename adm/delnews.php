<?php
session_start();
if(!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}
require_once('../inc/db.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
	$checkid = $bdd->prepare('SELECT * FROM news WHERE id = :id');
	$checkid->bindParam(':id', $_GET['id']);
	$checkid->execute();
	if($checkid->rowCount() > 0) {
		$del = $bdd->prepare('DELETE FROM news WHERE id = :id');
		$del->bindParam(':id', $_GET['id']);
		$del->execute();
		header('Location: index.php');
	} else {
		header('Location: index.php');
	}
} else {
	header('Location: index.php');
}
?>