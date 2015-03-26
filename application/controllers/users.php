<?php
class Users extends CI_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->model ( 'users_model', '', TRUE );
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
}
?>