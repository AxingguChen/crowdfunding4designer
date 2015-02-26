<?php
/*
 * Created on Feb 9, 2015
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 class Test extends CI_Controller {
 	
 	function index(){
		
 	}

 	function about(){
		$this->load->library('pagination');
 		$this->load->library('table');
 		
 		//$this->table->set_heading('name','ID');
 		
 		$config['base_url'] = 'http://localhost/index.php/test/about';
 		$config['total_rows'] = $this->db->get('test')->num_rows();
 		$config['per_page'] = 10;
 		$config['num_links'] = 4;
 		 		
		$this->pagination->initialize($config);
 		
 		$data['records'] = $this->db->get('test',$config['per_page'],$this->uri->segment(3));
 		
 		$this->load->view('about_view',$data);
 	}
 }
 
?>
