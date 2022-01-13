 <?php defined('BASEPATH') OR exit ('No direct script access alowed');
 header('Access-Control-Allow-Origin: *'); 
 
class Parcours_p extends CI_Model{
	
	public function ajouterParcours($title, $src, $definition){

		
			$fields =array(
				'nom' => $title,
				'image' => $src,
				'paragraph'=> $definition
			);	
			$this->db->insert('parcours', $fields);
		
	}
	
	public function deleteparcours($id){
		$this->db->delete('parcours', array('id' => $id)); 
	}
	
	public function updateparcours($nom,$paragraph,$image,$id){
		
		$sql = "UPDATE parcours SET nom= ?, paragraph=?,image=?  WHERE id = ? ";
		$this->db->query($sql, array($nom,$paragraph,$image,$id));
	}
	
	public function afficherAllPArcours(){
		
		$query = $this->db->query('SELECT * FROM parcours    ');

		$result = $query->result_array();
		return $result;
	}
}