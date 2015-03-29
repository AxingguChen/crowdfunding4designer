<?php
class Upload extends CI_Controller {
	function __construct() {
		parent::__construct ();
		// $this->load->helper(array('form', 'url'));
	}
	function index() {
		$this->load->view ( 'upload_view', array (
				'error' => ' ' 
		) );
	}
	
	// access
	// index.php/upload/upload_technical_drawing/1
	function upload_technical_drawing($projects_id) {
		$this->load->model ( 'projects_model' );
		$file_name = $projects_id . '.pdf';
		
		$config ['file_name'] = $file_name;
		$config ['upload_path'] = './assets/img/drawing';
		$config ['allowed_types'] = 'gif|jpg|png|txt|pdf';
		$config ['max_size'] = '1024';
		$config ['max_width'] = '1024';
		$config ['max_height'] = '768';
		$config ['overwrite'] = true;
		
		$this->load->library ( 'upload', $config );
		
		if (! $this->upload->do_upload ( 'technical_drawing' )) {
			$data ['error'] = array (
					'error' => $this->upload->display_errors () 
			);
			$data ['upload_flag'] = 2;
			$data ['rows'] = $this->projects_model->get_by_id ( $projects_id );
			$this->load->view ( 'project_modify_view', $data );
			// $this->load->view('upload_view', $error);
		} else {
			// $data = array('upload_data' => $this->upload->data());
			// update db
			$tmparray ['technical_drawing'] = 'img/drawing/' . $projects_id . '.pdf';
			$ret = $this->projects_model->update_project ( $projects_id, $tmparray );
			if ($ret >= 0)
				$data ['upload_flag'] = 1;
			$data ['rows'] = $this->projects_model->get_by_id ( $projects_id );
			$this->load->view ( 'project_modify_view', $data );
		}
	}
	
	// access
	// index.php/upload/certificate_file(action in the form of user_update_view page)
	function certificate_file() {
		$file_element_name = 'certificate_file';
		
		$this->load->model ( 'users_model' );
		$session_data = $this->session->userdata ( 'logged_in' );
		$users_id = $session_data ['id'];
		$file_name = $users_id . '.pdf';
		
		$config ['file_name'] = $file_name;
		$config ['upload_path'] = './assets/img/certificate';
		$config ['allowed_types'] = 'gif|jpg|png|doc|txt|pdf';
		$config ['max_size'] = 1024 * 8;
		$config ['encrypt_name'] = FALSE;
		$config ['overwrite'] = true;
		
		$this->load->library ( 'upload', $config );
		if (! $this->upload->do_upload ( $file_element_name )) {
			echo $this->upload->display_errors ( '', '' );
		} else {
			$data = $this->upload->data ();
			$image_path = $data ['full_path'];
			if (file_exists ( $image_path )) {
				// update db
				$tmparray ['certificate_file'] = 'img/certificate/' . $users_id . '.pdf';
				$ret = $this->users_model->update_profile ( $users_id, $tmparray );
				$data = $this->upload->data ();
				echo "File successfully uploaded";
			} else {
				echo "Something went wrong when saving the file, please try again.";
			}
		}
		@unlink ( $_FILES [$file_element_name] );
	}
	
	// access test
	// index.php/upload/upload_ajax
	function upload_ajax() {
		$status = "";
		$msg = "";
		$file_element_name = 'userfile';
		
		if ($status != "error") {
			$config ['upload_path'] = './assets/test';
			$config ['allowed_types'] = 'gif|jpg|png|doc|txt|pdf';
			$config ['max_size'] = 1024 * 8;
			$config ['encrypt_name'] = FALSE;
			
			$this->load->library ( 'upload', $config );
			if (! $this->upload->do_upload ( $file_element_name )) {
				$status = 'error';
				$msg = $this->upload->display_errors ( '', '' );
			} else {
				$data = $this->upload->data ();
				$image_path = $data ['full_path'];
				if (file_exists ( $image_path )) {
					$status = "success";
					$msg = "File successfully uploaded";
				} else {
					$status = "error";
					$msg = "Something went wrong when saving the file, please try again.";
				}
			}
			@unlink ( $_FILES [$file_element_name] );
		}
		echo json_encode ( array (
				'status' => $status,
				'msg' => $msg 
		) );
	}
}
?>