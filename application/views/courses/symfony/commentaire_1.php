<?php 
// src/Sdz/BlogBundle/Entity/Commentaire.php 
namespace Sdz\BlogBundle\Entity; 
use Doctrine\ORM\Mapping as ORM; 
/** 
* Sdz\BlogBundle\Entity\Commentaire 
** 
@ORM\Table() 
*@ 
ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\CommentaireRepository") 
*/ 
class Commentaire 
{ 
	/** 
	* @var integer $id 
	** 
	@ORM\Column(name="id", type="integer") 
	* @ORM\Id 
	* @ORM\GeneratedValue(strategy="AUTO") 
	*/ 
	private $id; 
	/** 
	* @var string $auteur 
	** 
	@ORM\Column(name="auteur", type="string", length=255) 
	*/ 
	private $auteur; 
	/** 
	* @var text $contenu 
	** 
	@ORM\Column(name="contenu", type="text") 
	*/ 
	private $contenu; 
	/** 
	* @var datetime $date 
	** 
	@ORM\Column(name="date", type="datetime") 
	*/ 
	private $date; 
	public function __construct() 
	{ 
		$this->date = new \Datetime(); 
	} 
	/** 
	* Get id 
	** 
	@return integer 
	*/ 
	public function getId() 
	{ 
		return $this->id; 
	} 
	/** 
	* Set auteur 
	** 
	@param string $auteur 
	*/ 
	public function setAuteur($auteur) 
	{ 
		$this->auteur = $auteur; 
	} 
	/** 
	* Get auteur 
	** 
	@return string 
	*/ 
	public function getAuteur() 
	{ 
		return $this->auteur; 
	} 
	/** 
	* Set contenu 
	** 
	@param text $contenu 
	*/ 
	public function setContenu($contenu) 
	{ 
		$this->contenu = $contenu; 
	} 
	/** 
	* Get contenu 
	** 
	@return text 
	*/ 
	public function getContenu() 
	{ 
		return $this->contenu; 
	} 
	/** 
	* Set date 
	** 
	@param datetime $date 
	*/ 
	public function setDate(\Datetime $date) 
	{ 
		$this->date = $date; 
	} 
	/** 
	* Get date 
	** 
	@return datetime 
	*/ 
	public function getDate() 
	{ 
		return $this->date; 
	} 
}