<?php
class Users extends CI_Controller {

	//anyone
	//view pages
	private $ACL_VIEW = 'acl_view';
	//checker designer user
	//view personal profile and update profile
	private $ACL_VIEW_PROFILE = 'acl_view_profile';
	private $ACL_UPDATE_PROFILE = 'acl_update_profile';
	//checker deisgner
	//create project and update self project
	private $ACL_CREATE_PROJECT = 'acl_create_project';
	private $ACL_UPDATE_PROJECT = 'acl_update_project';
	//checker
	//check the user application to designer and pending projects
	private $ACL_UPDATE_CHECK = 'acl_update_check';
	
	function __construct() {
		parent::__construct ();
		$this->load->model ( 'users_model', '', TRUE );
		$this->load->model ( 'acl_model', '', TRUE );
	}
	
	// access
	// index.php/users/user_profile
	function user_profile() {
		// get session data
		if ($this->session->userdata ( 'logged_in' )) {
			$session_data = $this->session->userdata ( 'logged_in' );
			// get user data by id
			$data ['rows'] = $this->users_model->getById ( $session_data ['id'] );
			$this->load->view ( 'user_profile_view', $data );
		} else {
			redirect ( 'verification/login', 'refresh' );
		}
	}
	
	// access
	// index.php/users/user_update
	function user_update() {
		// get session data
		if ($this->session->userdata ( 'logged_in' )) {
			$session_data = $this->session->userdata ( 'logged_in' );
			// get user data by id
			$data ['rows'] = $this->users_model->getById ( $session_data ['id'] );
			$this->load->view ( 'user_update_view', $data );
		} else {
			redirect ( 'verification/login', 'refresh' );
		}
	}
	
	// access
	// index.php/users/user_profile
	function update_profile() {
		// get session data
		if ($this->session->userdata ( 'logged_in' )) {
			$session_data = $this->session->userdata ( 'logged_in' );
			
			$tmparray = $this->input->post ( NULL, TRUE );
			$this->users_model->update_profile ( $session_data ['id'], $tmparray );
			
			// get user data by id
			$data ['rows'] = $this->users_model->getById ( $session_data ['id'] );
			$this->load->view ( 'user_profile_view', $data );
		} else {
			redirect ( 'verification/login', 'refresh' );
		}
	}
	
	// access
	// index.php/users/users_check
	function users_check() {
		// Todo: login as a checker
		$this->load->model ( 'users_model' );
		$data ['rows'] = $this->users_model->get_all ();
		$this->load->view ( 'users_check_view', $data );
	}
	
	// access
	// index.php/users/user_check/1
	function user_check($users_id) {
		// Todo: login as a checker
		// get user data by id
		$data ['rows'] = $this->users_model->getById ( $users_id );
		$this->load->view ( 'user_check_view', $data );
	}
	
	// access
	// index.php/users/user_check_update/1
	function user_check_update($users_id) {
		// Todo: login as a checker
		$tmparray = $this->input->post ( NULL, TRUE );
		$tmparray['flag_pending'] = $this->input->post ( 'flag_pending', TRUE )==null ? 0 : 1;
		$tmparray['flag_accepted'] = $this->input->post ( 'flag_accepted', TRUE )==null ? 0 : 1;
		$tmparray['flag_declined'] = $this->input->post ( 'flag_declined', TRUE )==null ? 0 : 1;
		
		$this->users_model->update_profile ( $users_id, $tmparray );
		
		$data ['rows'] = $this->users_model->getById ( $users_id );
		$this->load->view ( 'user_check_view', $data );
	}
	
	//access
	//projects/upload
	public function upload()
	{
		//$this->load->helper(array('form', 'url'));
		$session_data = $this->session->userdata ( 'logged_in' );
		$users_id = $session_data['id'];
		$file_name =  $users_id.'.pdf';
		$config['file_name'] = $file_name;
		$config['upload_path'] = './assets/certificate';
		$config['allowed_types'] = 'gif|jpg|png|txt|pdf';
		$config['max_size']	= '1024'; //kb
		//$config['max_width']  = '1024';//image width
		//$config['max_height']  = '768';//image heigth
		$config['overwrite'] = true;
	
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('certificate_file'))
		{
			$error = array('error' => $this->upload->display_errors());
	
			$this->load->view('upload_view', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_success', $data);
			//update db
			$tmparray['technical_drawing'] = 'img/certificate/'.$users_id.'.pdf';
			$ret = $this->users_model->update_profile($users_id, $tmparray);
		}
	
	
	}
	
	//test
	function test($user_id)
	{		
	
		$test['authority'] = $this->ACL_UPDATE_PROJECT;	
		//how to use acl
		$data = $this->acl_model->acl($user_id,$this->ACL_UPDATE_PROJECT);
		print_r($data);
		if($data)$test['test']='true';else $test['test']='false';
		print_r($test);
	}
	
}
?>