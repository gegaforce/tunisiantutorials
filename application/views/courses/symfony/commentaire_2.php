<?php 

// src/Sdz/BlogBundle/Entity/Commentaire.php 

/** 
* @ORM\Entity 
*/ 
class Commentaire 
{
	/**

	* @ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\Article") 
	* @ORM\JoinColumn(nullable=false) 
	*/ 
	private $article; 
	
	// … reste des attributs 
	
	/** 
	* Set article 
	** 
	@param Sdz\BlogBundle\Entity\Article $article 
	*/ 
	public function setArticle(\Sdz\BlogBundle\Entity\Article $article) 
	{ 
		$this->article = $article; 
	}
	
	/** 
	* Get article 
	** 
	@return Sdz\BlogBundle\Entity\Article 
	*/ 
	public function getArticle() 
	{ 
		return $this->article; 
	}
	
	// … reste des getters et setters 
}