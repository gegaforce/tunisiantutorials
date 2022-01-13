<?php
class Course extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('assets');
		$this->load->model('course_c', 'c');
	}
	
	public function index($cours,$subtitle)
	{
		echo $cours.'</br>';
		echo $subtitle;
	}

	public function cours($title,$chapter,$paragraph)
	{
		$d = $this->c->getFolder(urldecode($title));
		
		$folder = $d['0']['folder'];
		//print_r($_SERVER['REMOTE_ADDR']);die;
		//$this->countLineNumbers($folder,$numero_chapter,$numero_paragraph );
		
		$title = urldecode($title);
		$chapter = urldecode($chapter);
		$paragraph = urldecode($paragraph);
		//var_dump($title);die;
		$query_paragraph = $this->c->getParagraph($title, $chapter,$paragraph);
		
		//print_r($query_paragraph);die;
		$numero_paragraph = $query_paragraph['0']['numero_paragraph'];
		//print_r($query_paragraph);die;
		$numero_chapter = $query_paragraph['0']['numero_chapter'];
		$folder = $query_paragraph['0']['folder'];
		$data['query'] = $this->c->courses($title);		

		$data['selected'] = $paragraph;
		$data['chapters'] =  $this->c->chapters($title);
		$data['title'] = $title;
		
		//var_dump($array);die;
			$data['title_header'] = $paragraph;
			
			$this->load->view('home/header',$data);
			$this->load->view('courses/arborescence', $data);
			$this->load->view('courses/tableOfContent_lateral',$data);
			//echo '<article>';
			$this->load->view('home/connexion');
			$this->load->view("courses/".$folder.'/'.$numero_chapter.'/'.$numero_paragraph);
			//echo '</article>';
			$this->load->view('courses/global/modal');
			$this->load->view('home/definition');
			$this->load->view('home/footer');
	}
	
	public function tabeOfContent($title){
		$title = urldecode($title);
		$data['query'] = $this->c->courses($title);
		$data['chapters'] =  $this->c->chapters($title);
		//print_r($data['chapters']);die;
		$data['title'] = $title;
		$this->load->view('home/header',true);
		$this->load->view('courses/tableOfContent_principale',$data);
	}
	
	public function getSubtitles(){
		
		$array = $this->c->subtitles();
		
		$id=0;
		foreach($array as $row) {
			$data[$id] = $row['subtitle'];
			$id++;
		}

		echo json_encode($array, JSON_UNESCAPED_UNICODE);
	}

	public function stable(){
		foreach(file('C:/wamp6/www/ci/application/controllers/file.txt') as $line) {
			$title = 'صمم موقعك بـ PHP+MySQL';
			$subtitle = $line;
			$chapter = 'قواعد الـ PHP';
			$path='C:/wamp6/www/ci/application/views/courses/'.urlencode($title);
			//mkdir($path, 0777, true);
			$myfile = fopen($path.'/'.urlencode($subtitle).'.php', "w+");
			fwrite($myfile, 'content');
			fclose($myfile);
		}
		$array = $this->c->courses();
		$data['query'] = $array;
		//var_dump($array);
		$this->load->view('courses/arborescence', $data);
	}
	
	public function write_chapters(){
		$monfichier = fopen('C:/wamp6/www/ci/application/controllers/file.txt','r+');
		$ligne="ligne";$title = '';$chapitre ='' ;$subtitle = '';
		while($ligne!='0'){
			$ligne = fgets($monfichier);
			if(strpos($ligne,'title') !==false){
				$title = str_replace("title", "",$ligne);
			}elseif(strpos($ligne,'chapitre')!== false){
				$chapitre = str_replace("chapitre", "",$ligne);
			}else{
				$subtitle = $ligne;
				$result = $this->c->addSubTitle($title, $chapitre, $subtitle);
			}
			
		}
		fclose($monfichier);	
	}
	
	public function subtitle($subtitle){
		$this->c->subtitle($subtitle);
	}
	
	public function countLineNumbers($folder,$numero_chapter,$numero_paragraph ){

		$monfichier = fopen('ftp://b7_22523934:TheyNever@ftp.byethost7.com/htdocs/application/views/courses/'.$folder.'/'.$numero_chapter.'/'.$numero_paragraph.'.php','r');
		$ligne ="";
		$count =0;
		//var_dump($monfichier);die;
		while(!feof($monfichier)){
			$ligne = fgets($monfichier);
			
			$count =$count+ strlen($ligne);
		}
		$data = array(
					'nombre_chars' => $count
				);
		$result = $this->c->updateCount($folder, $numero_chapter, $numero_paragraph,$data);
		//echo $count;
	}
	
	public function ajouterCours(){
		$sourcePath = $_FILES['file_img']['tmp_name'];       
		$targetPath = 'assets/images/logos/'.$_FILES['file_img']['name']; 
		move_uploaded_file($sourcePath,$targetPath);
		$logo =$_FILES['file_img']['name'];
		$definition =$_POST['definition'];
		$title =$_POST['title'];
		$res  = $this->c->ajouterCours($title, $definition, $logo);
		$array = array(
				'title' => $title,
				'logo' => $logo,
				'definition' => $definition
				);
		//$out = array_values($array);
		echo json_encode($array);
	}
	public function recupererAllCours(){
		$data['cours']  = $this->c->cous_all();
		$this->load->view('admin/liste_cours', $data);
	}
}