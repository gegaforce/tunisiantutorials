<?php
	$reponse = $bdd->query('SELECT champinconnu FROM jeux_video') or die (print_r($bdd->errorInfo())) ;
?>