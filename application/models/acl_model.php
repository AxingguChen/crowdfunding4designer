<?php
/**
 * model for access control
 *
 */

class Acl_model extends CI_Model {
		
	/**
	 * get the authority of accessing by providing the action and users_Id
	 * return ture if authorized
	 *
	 * @access public
	 * @param int $users_id
	 * @param string $operation
	 * @return ture if authorized
	 */
	function acl($users_id, $operation)
	{
		$this->db->select ($operation);
		$this->db->from('acl');
		$this->db->join('users', "users.users_groups_id = acl.acl_groups_id");
		$this->db->where("users.users_id", $users_id);
		$query = $this->db->get ();
		foreach($query->result() as $r)
		{
			$authorized = $r->$operation;
		}
		return $authorized;
	}

}

?>