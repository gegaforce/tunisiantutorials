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
// …
}
?>