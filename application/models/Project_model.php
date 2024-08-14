<?php
 
 
class Project_model extends CI_Model{

	public function getAllMainProjects(){
		$sql = $this->db->query("select m.id,task_title,t.status,p.title,m.hours,m.date,m.description from tbl_main_projects m left join tbl_projects p on p.id=m.fk_projectid 
		left join tbl_tasks t on t.id=m.fk_task_id");
		return $sql->result_array();
	}

	public function getSearch($s=""){
		$where="";
		$str = $this->RemoveSpecialChar($s); 
		if($s!=''){
			$where =" where p.title like '%".$str."%'";	
		}
		$sql = $this->db->query("select m.id,m.fk_projectid,p.title,sum(hours) as tot from tbl_main_projects m 
		left join tbl_projects p on p.id=m.fk_projectid left join tbl_tasks t on t.id=m.fk_task_id ".$where." group by m.fk_projectid");
		return $sql->result_array();
	}

	// Function to remove the special 
	public function RemoveSpecialChar($str){

		$res = str_ireplace( array( '\'', '"',
		',' , ';', '<', '>' ), ' ', $str);
  		return $res;
	}

	public function storeProduct($data){
		$this->db->insert('tbl_main_projects',$data);
	}

	public function getProduct($id){
		return $this->db->where('id',$id)->get('products')->row();
	}

	public function updateProduct($id,$data){
		$this->db->where('id',$id)->update('products',$data);
	}

	public function deleteProduct($id){
		$this->db->where('id',$id)->delete('products');
	}
	//all projects
	public function getAllProjects($where=""){
		
		 $this->db->select('*');
		 $this->db->from('tbl_projects');
		if($where!="")
			$this->db->where('status','Active');
		$projects = $this->db->get()->result();
		return $projects;
	}

	//getAllTasks

	public function getAllTasks(){
		$sql = $this->db->query("select t.id,task_title,t.status,p.title from tbl_projects p left join tbl_tasks t on t.fk_project_id=p.id");
		return $sql->result_array();
		
	}
}
