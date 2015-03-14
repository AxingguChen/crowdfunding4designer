<?php


class Projects extends CI_Controller {
	
	function index(){
		
	}
	
	function recommend(){
		$this->load->model('projects_model');
		$data['rows'] = $this->projects_model->recommend();
		
		$this->load->view('projects_view',$data);
	}
	
	function woman(){
		$this->load->model('projects_model');
		$data['rows'] = $this->projects_model->woman();
	
		$this->load->view('projects_view',$data);
	}
	
	function man(){
		$this->load->model('projects_model');
		$data['rows'] = $this->projects_model->man();
	
		$this->load->view('projects_view',$data);
	}
	
	function project(){
		$this->load->model('projects_model');
		$project_id = $_GET['id'];
		$data['rows'] = $this->projects_model->project($project_id);
		
		$this->load->view('project_view',$data);
	}
	
}

?>