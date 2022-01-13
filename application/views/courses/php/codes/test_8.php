<?php
$req = $bdd->prepare('SELECT nom FROM jeux_video WHERE possesseur =?');
$req->execute(array($_GET['possesseur']));
?>