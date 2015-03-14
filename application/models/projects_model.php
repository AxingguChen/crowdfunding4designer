<?php
/*
 * Created on Mar 14, 2015
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 
 class Projects_model extends  CI_Model{
 		
	function getAll(){
 		//$q = $this->db->query("SELECT * FROM projects");
		$q = $this->db->get('projects');
		if($q->num_rows() > 0){
			foreach ($q->result() as $rows)
			{
			    $data[] = $rows;
			}
			
			return $data;
	 	}
	 		
	}	

	function recommend(){
		//$q = $this->db->query("SELECT * FROM projects");
		$q = $this->db->get('projects');
		if($q->num_rows() > 0){
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
				
			return $data;
		}
	
	}
	
	function woman(){
		$q = $this->db->query("SELECT * FROM projects where sex = 'female' or sex = 'neutral'");
		//$q = $this->db->get('projects');
		if($q->num_rows() > 0){
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
	
			return $data;
		}
	
	}
	
	function man(){
		$q = $this->db->query("SELECT * FROM projects where sex = 'male' or sex = 'neutral'");
		//$q = $this->db->get('projects');
		if($q->num_rows() > 0){
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
	
			return $data;
		}
	
	}
	
	function project($project_id){
		$q = $this->db->query("SELECT * FROM projects where id = ".$project_id);
		//$q = $this->db->get('projects');
		if($q->num_rows() > 0){
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
	
			return $data;
		}
	}
 	
 }
 
?>