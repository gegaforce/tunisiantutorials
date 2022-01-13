<?php
	$req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur');
	$req->execute(array('possesseur' => 'Patrick', 'prixmax' => 20)) or die(print_r($req->errorInfo()));
?>