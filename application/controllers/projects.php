<?php
class Projects extends CI_Controller
{
	public function __construct()
	{
	  parent::__construct();
	}
	
	public function index()
	{
		$this->load->model('projects_model');		
		$data['rows'] = $this->projects_model->get_all();
		$this->load->view('projects_view', $data);
	}

	public function project($id = 1)
	{
		if ($id > 0)
		{
			$this->load->model('projects_model');		
			$data['rows'] = $this->projects_model->get_by_id($id);
		}
		else
		{
			$data['rows'] = array();
		}
		$this->load->view('project_view', $data);
	}
}

?>
