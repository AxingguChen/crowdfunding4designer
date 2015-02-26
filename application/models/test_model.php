<?php
/*
 * Created on Feb 9, 2015
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 
 class Test_model extends  CI_Model{
 		
	function getAll(){
 		//$q = $this->db->query("SELECT * FROM test");
		$q = $this->db->get('test');
		if($q->num_rows() > 0){
			foreach ($q->result() as $row)
			{
			    $data[] = $row;
			}
			
			return $data;
	 	}
	 		
		}
		
 	
 }
 
?>
