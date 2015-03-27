<?php
/**
 * model for users table
 *
 */


class Users_model extends CI_Model {
	
	
	
	/**
	 * select * from users
	 *
	 * @access public
	 * @return all users
	 */
	function get_all() {
		// $this -> db -> select('*');
		$this->db->from ( 'users' );
		// $this -> db -> limit(1);
	
		$query = $this->db->get ();
		return $query->result ();
	}
	
	
	/**
	 * provide login input of email and password
	 * return user info if match
	 *
	 * @access public
	 * @param string $email       	
	 * @param stting $password      	       	
	 * @return login user records
	 */
	function login($email, $password) {
		$this->db->select ( 'users_id, email, password' );
		$this->db->from ( 'users' );
		$this->db->where ( 'email', $email );
		$this->db->where ( 'password', sha1 ( $password ) );
		// $this -> db -> limit(1);
		
		$query = $this->db->get ();
		
		if ($query->num_rows () == 1) {
			return $query->result ();
		} else {
			return false;
		}
	}
	
	/**
	 * input from form
	 * intser the data to users(table)
	 *
	 * @access public
	 * @return null
	 */	
	function register() {
		$data = array (
				'email' => $this->input->post ( 'email' ),
				'username' => $this->input->post ( 'username' ),
				'groups_id' => 12,
				'password' => sha1 ( $this->input->post ( 'password' ) ) 
		);
		$this->db->insert ( 'users', $data );
	}
	
	/**
	 * select * from users where email = $email
	 * return match user
	 *
	 * @access public
	 * @param string $email
	 * @return match user
	 */	
	function getByEmail($email) {
		// $this -> db -> select('id, email');
		$this->db->from ( 'users' );
		$this->db->where ( 'email', $email );
		// $this -> db -> limit(1);
		
		$query = $this->db->get ();
		
		if ($query->num_rows () == 1) {
			return $query->result ();
		} else {
			return false;
		}
	}
	
	/**
	 * select * from users where id = $id
	 * return match user
	 *
	 * @access public
	 * @param string $id
	 * @return match user
	 */
	function getById($id) {
		// $this -> db -> select('id, email');
		$this->db->from ( 'users' );
		$this->db->where ( 'users_id', $id );
		// $this -> db -> limit(1);
		
		$query = $this->db->get ();
		
		if ($query->num_rows () == 1) {
			return $query->result ();
		} else {
			return false;
		}
	}
	
	/**
	 * input from form
	 * update the data to users(table)
	 *
	 * @access public
	 * @return null
	 */
	function update_profile($id, $data) {

		$this->db->where('users_id', $id);
		$this->db->update('users', $data);
		
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			// 鐢熸垚涓�鏉￠敊璇俊鎭�... 鎴栬�呬娇鐢� log_message() 鍑芥暟鏉ヨ褰曚綘鐨勯敊璇俊鎭�
			return -1;
		}
		else
		{
			return $this->db->affected_rows();
		}
		
	}
}
?>