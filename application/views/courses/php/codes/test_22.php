<?php
// Vérification de la validité des informations
// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);
// Insertion
$req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email,
date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(
'pseudo' => $pseudo,
'pass' => $pass_hache,
'email' => $email));