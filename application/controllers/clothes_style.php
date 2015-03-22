<?php
class Clothes_style extends CI_Controller
{
	public function __construct()
	{
	  parent::__construct();
	}
	
	//access
	//index.php/clothes_size
	public function index()
	{
		$this->load->model('clothes_style_model');		
		$data['rows'] = $this->clothes_style_model->get_all();
		$this->load->view('clothes_style_view', $data);
	}
}
?>
