<?php
class Clothes_style extends CI_Controller
{
	public function __construct()
	{
	  parent::__construct();
	}
	
	//access
	//index.php/clothes_style
	public function index($choose_id = 1)
	{
		$this->load->model('clothes_style_model');		
		$data['rows'] = $this->clothes_style_model->get_all();
		$data['choose'] = $choose_id;
		$this->load->view('clothes_style_view', $data);
	}
}
?>
