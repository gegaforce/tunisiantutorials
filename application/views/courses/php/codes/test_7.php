<?php
$req = $bdd->prepare('SELECT nom FROM jeux_video WHERE possesseur =? AND prix <= ?');
$req->execute(array($_GET['possesseur'], $_GET['prix_max']));
?>