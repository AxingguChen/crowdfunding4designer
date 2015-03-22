<?php
class Clothes_size extends CI_Controller
{
	public function __construct()
	{
	  parent::__construct();
	}
	
	//access
	//index.php/clothes_size
	public function index()
	{
		$this->load->model('clothes_size_model');		
		$data['rows'] = $this->clothes_size_model->get_all();
		$this->load->view('clothes_size_view', $data);
	}
}
?>
