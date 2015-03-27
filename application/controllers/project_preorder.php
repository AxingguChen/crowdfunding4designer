<?php
/**
 * controller for project_preorder
 * 2015-03-27
 */

class Project_preorder extends CI_Controller
{
	
	function __construct() {
		parent::__construct ();
		$this->load->model ( 'project_preorder_model', '', TRUE );
	}
	
	// access
	// index.php/project_preorder/preorders
	function preorders() {
		// get session data
		if ($this->session->userdata ( 'logged_in' )) {
			$session_data = $this->session->userdata ( 'logged_in' );

			$data ['rows'] = $this->project_preorder_model->get_preorders_of_user($session_data ['id']);
			$this->load->view ( 'project_preorder_view', $data );
			//print_r($data);
			
		} else {
			redirect ( 'verification/login', 'refresh' );
		}	
	}

}

?>