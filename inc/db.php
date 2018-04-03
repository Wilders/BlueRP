<?php
try {
$bdd = new PDO('mysql:host=HOTE;dbname=DBNAME;charset=utf8', 'USER', 'PASSWORD');
}
catch(Exception $e) {
	die('Erreur : ' . $e->getMessage());
}
?>