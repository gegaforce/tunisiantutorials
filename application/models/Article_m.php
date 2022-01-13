 <?php defined('BASEPATH') OR exit ('No direct script access alowed');
 header('Access-Control-Allow-Origin: *'); 
class Article_m extends CI_Model{
	
	public function addArticle($title, $code){
		$field = array(
				'code'=>$code,
				'title'=>$title
			);
		$this->db->insert('articles', $field);
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
}