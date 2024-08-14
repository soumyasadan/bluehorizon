<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {

	public function __construct() {
		parent::__construct(); 
		$this->load->model('project_model');
	}

	public function index($s="")
	{	
		if($s==""){
			$data['projects']  = $this->project_model->getSearch();
		}else{
			$s = $this->input->post('search');
			$data['projects']  = $this->project_model->getSearch($s);
		}
		$data['title'] = "Report";
		$this->load->view("include/header",$data);
		$this->load->view('products/search',$data);
	}

	public function search($s="")
	{	
		if($s==""){
			$data['projects']  = $this->project_model->getSearch();
		}else{
			$s = $this->input->post('search');
			$data['projects']  = $this->project_model->getSearch($s);
		}
		$data['title'] = "Report";
		$this->load->view('products/search1',$data);
	}

	public function mainprojects()
	{	
		$data['projects']  = $this->project_model->getAllMainProjects();
		$data['title'] = "Main Project List";
		$this->load->view("include/header",$data);
		$this->load->view('products/index',$data);
	}

	public function create(){
		$data['title'] = "Create Product";
		
		$data['projects']  = $this->project_model->getAllProjects($where="status");
		$this->load->view("include/header",$data);
		$this->load->view('products/create',$data);
	}

	public function storeProduct(){
		$data['hours'] = $this->input->post('hours');
		$data['description'] = $this->input->post('description');
		$data['fk_projectid'] = $this->input->post('fk_projectid');
		$data['fk_task_id'] = $this->input->post('fk_task_id');
		$date = $this->input->post('date');
		$newDate = date("Y-m-d", strtotime($date));  
		$data['date'] = $newDate;
		$this->project_model->storeProduct($data);
		redirect('project');
	}

	//get all projects

	public function all_projects()
	{	
		$data['projects']  = $this->project_model->getAllProjects();
		$data['title'] = "Project List";
		$this->load->view("include/header",$data);
		$this->load->view('products/projectlist',$data);
	}

	//get all tasks

	public function all_tasks()
	{	
		$data['tasks']  = $this->project_model->getAllTasks();
		$data['title'] = "Task List";
		$this->load->view("include/header",$data);
		$this->load->view('products/tasklist',$data);
	}
	//get tasklist
	public function gettasks($id) { 
		$result = $this->db->where("fk_project_id",$id)->get("tbl_tasks")->result();
		echo json_encode($result);
	}
}
