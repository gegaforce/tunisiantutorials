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

	public function cours($title,$numero_chapter,$numero_paragraph)
	{
		$d = $this->c->getFolder(urldecode($title));
		$folder = $d['0']['folder'];
		//var_dump($folder);die;
		$this->countLineNumbers($folder,$numero_chapter,$numero_paragraph );
		$this->load->view('home/header',true);
		$title = urldecode($title);
		//var_dump($title);die;
		$query_paragraph = $this->c->getParagraph($title, $numero_chapter,$numero_paragraph);
		//var_dump($query_paragraph);die;
		$paragraph = $query_paragraph['0']['paragraph'];
		$folder = $query_paragraph['0']['folder'];
		$data['query'] = $this->c->courses($title);		

		$data['selected'] = $paragraph;
		$data['chapters'] =  $this->c->chapters($title);
		$data['title'] = $title;
		
		//var_dump($array);die;

			$this->load->view('courses/arborescence', $data);
			$this->load->view('courses/tableOfContent_lateral',$data);
			$this->load->view('courses/'.$folder.'/'.$numero_chapter.'/'.$numero_paragraph);
			$this->load->view('courses/global/modal');
			$this->load->view('home/footer');
	}
	
	public function tabeOfContent($title){
		$title = urldecode($title);
		$data['query'] = $this->c->courses($title);
		$data['chapters'] =  $this->c->chapters($title);
		//print_r($data['chapters']);
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

		$monfichier = fopen('D:/wamp/www/ci/application/views/courses/'.$folder.'/'.$numero_chapter.'/'.$numero_paragraph.'.php','r+');
		$ligne ="";
		$count =0;
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
}