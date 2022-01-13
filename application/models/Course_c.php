 <?php defined('BASEPATH') OR exit ('No direct script access alowed');
 header('Access-Control-Allow-Origin: *'); 
class Course_c extends CI_Model{
	public function addSubTitle($title, $chapitre, $subtitle){

		if($subtitle != null){
			$fields =array(
				'title' => $title,
				'chapter' => $chapitre,
				'subtitle'=> $subtitle
			);	$this->db->insert('Course', $fields);
		}
	}
	
	public function ajouterCours($title, $definition, $logo){
		$fields = array(
					'title' => $title,
					'logo' => $logo,
					'definition' => $definition
				);
				$this->db->insert('cours',$fields);
	}
	
	public function subtitle($subtitle){
		$query=$this->db->select('subtitle')
				->from('course')
				->where('subtitle',$subtitle);
			foreach ($query->result() as $row)
			{
				echo $row->title;
			}


	}
	public function addCourse($title, $subtitle, $numero, $chapter){
		
			$fields =array(
				'title' => $title,
				'subtitle' => $subtitle,
				'numero'=> $numero,
				'chapter'=> $chapter				
			);	
			$this->db->insert('Course', $fields);
				
	}
	public function courses($title){

		
		$query = $this->db->query('SELECT DISTINCT chapter FROM course WHERE cours_id = (SELECT id FROM cours WHERE title LIKE\''.$title.'\')');

		$result = $query->result_array();
		return $result;
	}
	public function courses_all(){

		
		$query = $this->db->query("SELECT  c.title, ce.folder, ce.numero_chapter, ce.numero_paragraph,ce.paragraph, ce.chapter, ce.nombre_chars FROM cours c join course ce on ce.cours_id = c.id");

		$result = $query->result_array();
		return $result;
	}
	
	public function courseTitle(){
		$query = $this->db->query('SELECT logo,title FROM cours');
		$resultat = $query->result_array();
		return $resultat;		
	}
	
	public function cous_all(){
		$query = $this->db->query('SELECT * FROM cours');
		$resultat = $query->result_array();
		return $resultat;
	}
	public function chapters($title){
		$query = $this->db->query('SELECT  numero_chapter, numero_paragraph, paragraph,chapter FROM course WHERE cours_id = (SELECT id FROM cours WHERE title LIKE\''.$title.'\')');
		$resultat = $query->result_array();
		return $resultat;
	}
	public function subtitles(){
		$query = $this->db->query('SELECT subtitle FROM course WHERE title LIKE \'صمم موقعك بـ PHP+MySQL\'');
		$resultat = $query->result_array();
		return $resultat;
	}
	
	public function addParagraph($title,$logo, $content_file, $chapter, $i, $paragraph, $j){
			$fields =array(
				'title' => $title,
				'logo' => $logo,
				'folder' => $content_file,
				'chapter' => $chapter,
				'numero_chapter'=> $i,
				'paragraph'=> $paragraph,
				'numero_paragraph'=> $j
			);	
			$this->db->insert('Course', $fields);		
	}
	
	public function getParagraph($title,$chapter,$paragraph){
		$query = $this->db->query("SELECT * FROM course WHERE cours_id = (SELECT id FROM cours cs WHERE title LIKE '$title') AND chapter LIKE '$chapter' AND paragraph LIKE '$paragraph' ORDER BY paragraph DESC");
		$resultat = $query->result_array();
		return $resultat;		
	}
	
	public function getAllcoursesTitle()
	{
		$query = $this->db->query('SELECT DISTINCT title FROM cours');
		$resultat = $query->result_array();
		return $resultat;		
	}
	
	public function saveLogo($logo,$title_course){
		$this->db->where('title', $title_course);
		$this->db->update('course', array('logo' => $logo));
		return true;
	}
	public function updateCount($folder, $numero_chapter, $numero_paragraph,$data){
		$this->db->where(array(
							'folder'=> $folder,
							'numero_chapter' => $numero_chapter,
							'numero_paragraph' => $numero_paragraph
							)
						);
		$this->db->update('course', $data);
	}
	public function getFolder($title){
		$query = $this->db->query('SELECT DISTINCT folder FROM course WHERE cours_id = (SELECT id FROM cours WHERE title LIKE\''.$title.'\')');
		$resultat = $query->result_array();
		return $resultat;		
	}
	public function addCours($table){
		//print_r($table);
		
			foreach($table as $value){
				$query = $this->db->query('SELECT count(title) FROM cours WHERE title LIKE"'.$value.'"');
				$resultat = $query->result_array();
				$count = $resultat[0]['count(title)'];
				print_r($count);
				if($count == 0){
					 
					$fields =array(
						'title' => $value,
					);	
					$this->db->insert('Cours', $fields);
				} else{
					
					 echo 'done';
				}
			}

	}
	public function addParagraphDeux($l,$content_file, $chapter, $i, $paragraph,$j){
			$fields =array(
				'cours_id' => $l,
				'folder' => $content_file,
				'chapter' => $chapter,
				'numero_chapter'=> $i,
				'paragraph'=> $paragraph,
				'numero_paragraph'=> $j
			);	
			$this->db->insert('Course', $fields);		
	}
	
	public function coursExist($cours){
		$query = $this->db->query('SELECT count(title) FROM cours WHERE title LIKE"'.$cours.'"');
		$resultat = $query->result_array();
		$count = $resultat[0]['count(title)'];
		if($count <> 0){
			return false;
		}
	}
}