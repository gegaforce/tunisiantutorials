 <?php defined('BASEPATH') OR exit ('No direct script access alowed');
 header('Access-Control-Allow-Origin: *'); 
class Membre_m extends CI_Model{
	
	public function showAllMembre(){
		
		$this->db->order_by('id', 'desc');
		$query =$this->db->get('membre');
		if($query->num_rows() >0){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function addMembre($email, $password){
		$field = array(
			'email'=>$email,
			'password'=>$password
					);
		$this->db->insert('membre', $field);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	
	public function addNotification(){
		$field = array(
				'notification'=>1
			);
		$this->db->insert('notification', $field);
	}
	
	public function showNotification()
	{
		
		$query = $this->db->query('SELECT * FROM notification');
		echo $query->num_rows();
				
	}

}