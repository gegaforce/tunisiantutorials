<?php 
// src/Sdz/BlogBundle/Controller/BlogController.php 
public function voirAction($id) 
{ 

	$em = $this->getDoctrine()->getManager(); 

	$article = $em->getRepository('SdzBlogBundle:Article')->find($id); 
	
	if($article === null) 
	{ 
		throw $this>createNotFoundException('Article[id='.$id.'] inexistant.'); 
	} 

	$liste_commentaires = $em->getRepository('SdzBlogBundle:Commentaire')->findAll(); 
	return $this->render('SdzBlogBundle:Blog:voir.html.twig', array('article' => $article, 
											'liste_commentaires' => $liste_commentaires 
	)); 
}