<?php
class Writer extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('Article_m', 'art');
		$this->load->model('Course_c', 'c');
	}
	
	public function accueil(){
		
		$this->load->view('writer/accueil');
	}
	
	public function article(){
 		$this->load->view('writer/writerArticle');
	}
	
	public function createCode(){
		$title = $this->createTitle('12');
		$content = $_POST['text'];
		$path = 'application/views/courses/php/codes';
		$myfile = fopen("$path/$title.php", "w");
		fwrite($myfile, $content);
		echo 'success';	
	}
	public function course( $folder=null, $numero_chapter =null, $numero_paragraph=null){
		$data['folder'] = $folder;
		$data['numero_chapter'] = $numero_chapter;
		$data['numero_paragraph'] = $numero_paragraph;
		if(isset($folder)&&isset($numero_paragraph)){
			$data['content'] = file_get_contents("application/views/courses/$folder/$numero_chapter/$numero_paragraph.php", FILE_USE_INCLUDE_PATH);			
		}
		$this->load->view('writer/writerCourse', $data);
	}
	public function iFrame_loading_callback()
	{
		$this->load->view('writer/iFrame_loading_callback');
	}
	
	public function createTableOfContent($title, $content){
		$path_title='application/views/courses/'.$title;
		$myfile = fopen("$path_title/tableOfContent.php", "w");
		fwrite($myfile, $centent);
	}
	
	public function createCourse($title, $i, $j){
		
			// $numero = $_POST['numero'];
			// $chapter = $_POST['chapter'];
			
				// $paragraph = urlencode($paragraph);
				// $chapter = urlencode($chapter);
				$title = urlencode($title);				
			

			$path_title='application/views/courses/'.$title;//	var_dump($path);die;		
			$path_chapter=$path_title.'/'.$i;//	var_dump($path);die;		

			if(!file_exists($path_title)){
				mkdir($path_title, 0777, true);			
			}
			if(!file_exists($path_chapter)){
				mkdir($path_chapter, 0777,true);
			}

			$myfile = fopen("$path_chapter/$j.php", "w");
			if(isset($_POST['html'])){
				$content = '<article>'.$_POST['html'].'</article>';
				fwrite($myfile, $content);
			}else{
				fwrite($myfile, '<article></article>');
			}
	
		//echo 'success';
		
	}
	
	public function createParagraph(){
		
		$paragraph = $_POST['numero_paragraph'];
		$chapter = $_POST['numero_chapter'];
		$folder = $_POST['folder'];
		
		$content = $_POST['html'];
		
		$path_title='application/views/courses/'.$folder;	
		$path_chapter=$path_title.'/'.$chapter;	

		if(!file_exists($path_title)){
			mkdir($path_title, 0777, true);			
		}
		if(!file_exists($path_chapter)){
			mkdir($path_chapter, 0777,true);
		}

		$myfile = fopen("$path_chapter/$paragraph.php", "w");
		$handle = $myfile;
		$valid = false; // init as false
		while (($buffer = fgets($handle)) !== false) {
			if (strpos($buffer, "<style>") !== false) {
				$valid = TRUE;
				//echo  "valide ".$valid;
				//break; // Once you find the string, you should break out the loop.
			}  
		}
		if($valid === false){
			$content = '<article>'.$_POST['html'].'</article>'.$_POST['script'];
		}else{
			$content = $_POST['html'];
		}
		
		//$path_title='affiche.php';

		// if(!file_exists($path_title)){
			// mkdir($path_title, 0777, true);			
		// }
	
		//$myfile = fopen("affiche.php", "w");
		fwrite($myfile, $content);
		$homepage = file_get_contents("$path_chapter/$paragraph.php");
		//seek and remove <article> and </article>
		$art1 = str_replace("<article>", "", $homepage);
		$art2 = str_replace("</article>", "", $art1);
		echo $art2;
		fclose($handle);
	}
	
	public function createArticle()
	{
		if(isset($_POST['html'])&& ($_POST['html']!='') && isset($_POST['title'])&& ($_POST['title']!='')){
			
			
			$content = '<article>'.$_POST['html'].'</article>';			
			$title = urlencode($_POST['title']);
			$code = $this->createTitle('10');
			
			$path='application/views/articles';
			
			$this->addArticle($title, $code);
			
			$myfile = fopen("$path/$title.php", "w");
			fwrite($myfile, $content);
			
			echo 'success';	
		}

	}
	
	public function addArticle($title, $code)
	{
		$result = $this->art->addArticle($title, $code);
	}
	
	public function createTitle($nbCaractere)
	{
		$password = "";
		for($i = 0; $i <= $nbCaractere; $i++)
		{
			$random = rand(97,122);
			$password .= chr($random);
		}
	 
		return $password;
	}
	
	public function enregistrerContent(){
		$content = $_POST['content'];
		$title = $_POST['title'];
		$content_file = $_POST['content_file'];
		
		//upload image;
		$sourcePath = $_FILES['file']['tmp_name'];   
		$logo = $_FILES['file']['name'];
		$targetPath = 'assets/images/logos/'.$_FILES['file']['name']; 
		move_uploaded_file($sourcePath,$targetPath);
		$j=1;
		//echo img_url($_FILES['file']['name']);
			$myfile = fopen("$content_file.txt", "w");
			fwrite($myfile, $content);
			
			$handle = fopen("$content_file.txt", "r");
			if ($handle) {
				$chapter_detect = false;
				$i = 0;
				while (($line = fgets($handle)) !== false) {
					//echo $line;
					if($line == "\r\n"){
						$chapter_detect = true;
						
					}else{
						if($chapter_detect){
							$chapter = $line;
							echo $i.')'.$chapter;
							$chapter_detect = false;
							$i++;
							$j=1;
						}else{
							$paragraph = $line;
							echo $j.')'.$paragraph;
							// enregistrer dans la base de donnees
							$result = $this->c->addParagraph($title, $logo, $content_file, $chapter, $i, $paragraph,$j);
							// creation de dossiers et de fichiers
							$encode = true;
							$this->createCourse($content_file, $i, $j);
							$j++;
						}
					}
									
				}

				fclose($handle);
			} else {
				// error opening the file.
			} 
		
	}
	
	public function recupererDataBase(){
		$table = array("تصميم تطبيقات الأندرويد","تعلم البرمجة بـجافا سكريبت","تطبيقات سريعة بـNodeJS","تطوير المواقع بـJAVA EE","تطوير المواقع بمنصة Symfony 2","صمم موقعك بـ PHP و MySQL","تسهيل البرمجة بـ JQuery");
		$result = $this->c->addCours($table);
		$nb_fichier = 0;
		$j=1;
		$l=0;
		echo '<ul>';
		if($dossier = opendir('lesson'))
		{
			while(false !== ($fichier = readdir($dossier)))
			{

				if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
				{
					$nb_fichier++; // On incrémente le compteur de 1
					echo '<li><a href="./lesson/' . $fichier . '">' . $fichier . '</a></li>';
					echo $table[$l] .'<br>';
					
					$handle = fopen("lesson/$fichier", "r");
					if($handle){
						$chapter_detect = false;
						$i = 0;
						while(($line = fgets($handle)) !== false){
							if($line == "\n" || $line == "\r\n"){
								$chapter_detect = true;
								
							}else{
								if($chapter_detect){
									$chapter = $line;
									echo '<strong>'.$i.')'.$chapter.'</strong><br>';
									$chapter_detect = false;
									$i++;
									$j=1;
								}else{
									$paragraph = $line;
									echo $j.')'.$paragraph.'<br>';
									// enregistrer dans la base de donnees
									//$result = $this->c->addParagraphDeux($l+1,str_replace('.txt', '', $fichier), $chapter, $i, $paragraph,$j);
									// creation de dossiers et de fichiers
									$encode = true;
									//$this->createCourse($content_file, $i, $j);
									$j++;
								}
							}
						}
					}
					$l++;
				} // On ferme le if (qui permet de ne pas afficher index.php, etc.)
			 
			} // On termine la boucle
			echo '</ul><br />';
			echo 'Il y a <strong>' . $nb_fichier .'</strong> fichier(s) dans le dossier';
			 
			closedir($dossier);
		 
		}else
			 echo 'Le dossier n\' a pas pu être ouvert';
		 
		 
		foreach ($table as $key => $value){
			echo '<div dir = "rtl"  >'.$key."*".$value.'</div><br>';
		}
		//$result = $this->c->addParagraph($title, $logo, $content_file, $chapter, $i, $paragraph,$j);
	}
	
	public function uploadImage(){//var_dump($_FILES);die;
		$sourcePath = $_FILES['file_img']['tmp_name'];       
		$targetPath = 'assets/images/'.$_FILES['file_img']['name']; 
		move_uploaded_file($sourcePath,$targetPath);
		echo img_url($_FILES['file_img']['name']);
		
	}
	
	public function saveLogo(){
		//var_dump($_FILES);die;
		$logo = $_FILES['file']['name'];
		$title_course = $_POST['title_course'];
		$sourcePath = $_FILES['file']['tmp_name'];       
		$targetPath = 'assets/images/logos/'.$_FILES['file']['name']; 
		move_uploaded_file($sourcePath,$targetPath);
		//echo img_url($_FILES['file']['name']);
		$result = $this->c->saveLogo($logo,$title_course);
	}
}