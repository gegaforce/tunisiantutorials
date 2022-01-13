 <?php defined('BASEPATH') OR exit ('No direct script access alowed');
 header('Access-Control-Allow-Origin: *'); 
class Video_v extends CI_Model{
	
	public function videoTitle(){
		$query = $this->db->query('SELECT title FROM video');
		$resultat = $query->result_array();
		return $resultat;		
	}
	public function getAllVideosTitle()
	{
		$query = $this->db->query('SELECT DISTINCT title FROM video');
		$resultat = $query->result_array();
		return $resultat;		
	}
}