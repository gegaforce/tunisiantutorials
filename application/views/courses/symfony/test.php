<?php 
// src/Sdz/BlogBundle/Controller/BlogController.php 
// N'oubliez pas ce use ! 
use Sdz\BlogBundle\Entity\Commentaire; 
public function ajouterAction() 
{ 
	// Création de l'entité Article 
	$article = new Article(); 
	$article->setTitre('Mon dernier weekend'); 
	$article->setContenu("C'était vraiment super et on s'est bien amusé."); 
	$article->setAuteur('winzou'); 

	$commentaire1 = new Commentaire(); 
	$commentaire1->setAuteur('winzou'); 
	$commentaire1->setContenu('On veut les photos !'); 

	$commentaire2 = new Commentaire(); 
	$commentaire2->setAuteur('Choupy'); 
	$commentaire2->setContenu('Les photos arrivent !'); 

	$commentaire1->setArticle($article); 
	$commentaire2->setArticle($article); 

	$em = $this->getDoctrine()->getManager(); 

	$em->persist($article); 
	$em->persist($commentaire1); 
	$em->persist($commentaire2); 
	$em->flush(); 
	// … reste de la méthode 
}