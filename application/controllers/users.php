<?php
class Users extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model','',TRUE);
	}
	
	//access
	//index.php/users/user_profile
	function user_profile()
	{
		//get session data
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			//get user data by id
			$data['rows'] = $this->users_model->getById($session_data['id']);		
			$this->load->view('user_profile_view',$data);
		}
		else 
		{
			redirect('verification/login', 'refresh');
		}
		
		
	}
	
	//access
	//index.php/users/user_update
	function user_update()
	{
		//get session data
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			//get user data by id
			$data['rows'] = $this->users_model->getById($session_data['id']);
			$this->load->view('user_update_view',$data);
		}
		else
		{
			redirect('verification/login', 'refresh');
		}
	}
	
	//access
	//index.php/users/user_profile
	function update_profile()
	{
		//get session data
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			
			
			$tmparray = $this->input->post(NULL, TRUE);
			$this->users_model->update_profile($session_data['id'], $tmparray);
			
			
			//get user data by id
			$data['rows'] = $this->users_model->getById($session_data['id']);
			$this->load->view('user_profile_view',$data);
		}
		else
		{
			redirect('verification/login', 'refresh');
		}
	}

	
}
?>