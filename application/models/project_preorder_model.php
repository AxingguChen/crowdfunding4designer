<?php
/**
 * model for project_preorder
 * 2015-03-27
 */

class Project_preorder_model extends CI_Model
{
	/**
	 * select * from project_preorder
	 *
	 * @access public
	 * @return all preorders
	 */
	function get_all() {
		// $this -> db -> select('*');
		$this->db->from ( 'project_preorder' );
		// $this -> db -> limit(1);
	
		$query = $this->db->get ();
		return $query->result ();
	}
	
	/**
	 * select * from users where users_id = $users_id
	 * return match preorder(s)
	 *
	 * @access public
	 * @param string $id
	 * @return match preorder(s)
	 */
	function getById($users_id) {
		
		if ($users_id <= 0)
		{
			return -1;
		}
		$this->db->select('count(*)');
		$this->db->from($this->TABLENAME);
		$this->db->where("$this->TABLENAME.users_id", $users_id);
		$query = $this->db->get();
		return $query->result();
	}
	
	/**
	 * Get all comment of a project
	 *
	 * @access public
	 * @param integer $user_id
	 * @param integer $offset
	 * @param integer $limit
	 * @param string $order
	 * @param string $direction
	 * @return integer count
	 */
	public function get_preorders_of_user($user_id, $offset = 0, $limit = 0, $order = 'project_preorder_date', $direction = 'desc')
	{
		if ($user_id <= 0)
		{
			return -1;
		}
	
		$this->db->select('*');
		$this->db->from('project_preorder');
		$this->db->join('projects', "projects.projects_id = project_preorder.projects_id");
		$this->db->join('clothes_size', "clothes_size.clothes_size_id = project_preorder.clothes_size_id");
		$this->db->where("project_preorder.users_id", $user_id);
		if (strlen($order) > 0)
		{
			$this->db->order_by($order, $direction);
		}
		if ($limit > 0)
		{
			$this->db->limit($limit, $offset);
		}
		$query = $this->db->get();
		return $query->result();
	}
	
}

?>