<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_view', array('error' => ' ' ));
	}

	//access
	//index.php/upload/upload_technical_drawing/1
	function upload_technical_drawing($projects_id)
	{

		$file_name =  $projects_id.'.pdf';	
		
		$config['file_name'] = $file_name;
		$config['upload_path'] = './assets/img/drawing';
		$config['allowed_types'] = 'gif|jpg|png|txt|pdf';
		$config['max_size']	= '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['overwrite'] = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_view', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
			//update db
			$this->load->model('projects_model');
			$tmparray['technical_drawing'] = 'img/drawing/'.$projects_id.'.pdf';
			$ret = $this->projects_model->update_project($projects_id, $tmparray);
		}
	}
	
	//access
	//index.php/upload/certificate_file
	function upload_certificate_file()
	{
		
		$session_data = $this->session->userdata ( 'logged_in' );
		$users_id = $session_data['id'];
		$file_name =  $users_id.'.pdf';
	
		$config['file_name'] = $file_name;
		$config['upload_path'] = './assets/img/certificate';
		$config['allowed_types'] = 'gif|jpg|png|txt|pdf';
		$config['max_size']	= '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['overwrite'] = true;
	
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
	
			$this->load->view('upload_view', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
	
			$this->load->view('upload_success', $data);
			//update db
			$this->load->model('users_model');
			$tmparray['certificate_file'] = 'img/certificate/'.$users_id.'.pdf';
			$ret = $this->users_model->update_profile($users_id, $tmparray);
		}
	}
	
	
}
?>