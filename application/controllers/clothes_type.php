<?php
class Clothes_type extends CI_Controller
{
	public function __construct()
	{
	  parent::__construct();
	}
	
	//access
	//index.php/clothes_size
	public function index($choose_id = 1)
	{
		$this->load->model('clothes_type_model');		
		$data['rows'] = $this->clothes_type_model->get_all();
		$data['choose'] = $choose_id;
		$this->load->view('clothes_type_view', $data);
	}
}
?>
