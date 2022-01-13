<article>

<center><img src="<?= img_url('symfony/relationonetoone.png')?>" height="292" width="294"></center>
<div class="code" id="code_form" onClick="selectText('code_form')">
< ?php
// src/Sdz/BlogBundle/Entity/Image.php<br>
namespace Sdz\BlogBundle\Entity;<br>
use Doctrine\ORM\Mapping as ORM;<br>
/**<br>
* Sdz\BlogBundle\Entity\Image<br>
**<br>
@ORM\Table()<br>
<br>*@
<br>ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\ImageRepository")
<br>*/
<br>class Image
<br>{
<br>/**
<br>* @var integer $id
<br>**
<br>@ORM\Column(name="id", type="integer")
<br>* @ORM\Id
<br>* @ORM\GeneratedValue(strategy="AUTO")
<br>*/
<br>private $id;
<br>/**
<br>* @var string $url
<br>**
<br>@ORM\Column(name="url", type="string", length=255)
<br>*/
<br>private $url;
<br>/**
<br>* @var string $alt
<br>**
<br>@ORM\Column(name="alt", type="string", length=255)
<br>*/
<br>private $alt;
<br>// Les getters et setters
<br>}

</div>
<br><br>
تعريف العلاقة في les entités<br><br><br>
<div class="code" id="code_form" onClick="selectText('code_form')">
< ?php<br>
<br>// src/Sdz/BlogBundle/Entity/Article.php
<br>/**
<br>* @ORM\Entity
<br>*/
<br>class Article
<br>{
<br>/**
<br>* @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Image",
<br>cascade={"persist"})
<br>*/
<br>private $image;
<br>// …
<br>}
</div>
<br><br>
لانضيف شيئا في entité Image <br><br>
<div class="code" id="code_form" onClick="selectText('code_form')">

<br>< ?php
<br>// src/Sdz/BlogBundle/Entity/Image.php
<br>/**
<br>* @ORM\Entity
<br>*/
<br>class Image
<br>{
<br>// Nul besoin d'ajouter une propriété ici
<br>// …
<br>}
</div>
<br>أولا إخترنا l’entite Article كمالك للعلاقة لإن المقال فيه الصور وليس العكس.
<br>هذا يجعل الصورة مستقلة أكثر عن المقالات حيث يمكن إستعمالها لأكثر من entité
<br>كما نلاحظ أن الذي تغير فقط l’entité Article لأن العلاقة ذات إتجاه واحد unidirectionelle.
<br>أي يمكن ان نقول ()article->getImage$
<br>لكن ليس ()image->getArticle$
<br>في علاقة ذات إتجاه واحد l’entité العكسية هنا Image
<br>لا تستطيع إلا أن تكون على علاقة مع entité أخرى
<div class="code" id="code_form" onClick="selectText('code_form')">
@ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Image", cascade={"persist"})
</div>
<div class="code" id="code_form" onClick="selectText('code_form')">
<br>/**
<br>* @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Image")
<br>* @ORM\JoinColumn(nullable=false)
<br>*/
<br>private $image;
</div>
<div class="code" id="code_form" onClick="selectText('code_form')">

<br>< ?php
<br>// src/Sdz/BlogBundle/Entity/Article.php
<br>/**
<br>* @ORM\Entity
<br>*/
<br>class Article
<br>{
<br>/**
<br>* @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Image")
<br>*/
<br>private $image;
<br>// Vos autres attributs…
<br>/**
<br>* @param Sdz\BlogBundle\Entity\Image $image
<br>*/
<br>public function setImage(\Sdz\BlogBundle\Entity\Image $image =null)
<br>{
<br>$this->image = $image;
<br>}
<br>/**
<br>* @return Sdz\BlogBundle\Entity\Image
<br>*/
<br>public function getImage()
<br>{
<br>return $this->image;
<br>}
<br>// Vos autres getters/setters…
<br>}
</div>
<div class="code" id="code_form" onClick="selectText('code_form')">

<br>< ?php
<br>$image = $article->getImage();
<br>$url = $image->getUrl();
<br>// Ou bien sûr en plus simple :
<br>$url = $article->getImage()->getUrl();
</div>
<div class="code" id="code_form" onClick="selectText('code_form')">

<br>< ?php
<br>// src/Sdz/BlogBundle/Controller/BlogController.php
<br>// N'oubliez pas de rajouter ce use !
<br>use Sdz\BlogBundle\Entity\Image;
<br>// …
<br>public function ajouterAction()
<br>{
<br>// Création de l'entité Article
<br>$article = new Article();
<br>$article->setTitre('Mon dernier weekend');
<br>$article->setContenu("C'était vraiment super et on s'est bien
<br>amusé.");
<br>$article->setAuteur('winzou');
<br>// Création de l'entité Image
<br>$image = new Image();
<br>$image->setUrl('http://uploads.siteduzero.com/icones/478001_479000/478657.png');
<br>$image->setAlt('Logo Symfony2');
<br>// On lie l'image à l'article
<br>$article->setImage($image);
<br>// On récupère l'EntityManager
<br>$em = $this->getDoctrine()->getManager();
<br>// Étape 1 : on persiste les entités
<br>$em->persist($article);
<br>// Étape 1 bis : si on n'avait pas défini le cascade={"persist"}, on
<br>devrait persister à la main l'entité $image
<br>// $em->persist($image);
<br>// Étape 2 : on déclenche l'enregistrement
<br>$em->flush();
<br>// … reste de la méthode
<br>}
</div>
<div class="code" id="code_form" onClick="selectText('code_form')">
<?php highlight_file("voir.html.twig");?>
</div>
</article>