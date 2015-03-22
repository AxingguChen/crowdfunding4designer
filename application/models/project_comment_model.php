<?php
/**
 * this class is used for comment of
 * projects doing crd
 * add by hongxinpeng
 * 2015-03-22
 */

class Project_comment_model extends CI_Model 
{
	private $TABLENAME = 'project_comment';

	public function __construct()
    {
        parent::__construct();
    }

	/**
	 * Get comment's total count of a project
	 *
	 * @access public
	 * @param integer $id projects_id
	 * @return integer count
	 */
	public function get_count_of_project($id)
	{
		if ($id <= 0)
		{
			return -1;
		}
		$this->db->select('count(*)');
		$this->db->from($this->TABLENAME);
		$this->db->where("$this->TABLENAME.projects_id", $id);
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * Get all comment of a project
	 *
	 * @access public
	 * @param integer $id projects_id
	 * @param integer $offset
	 * @param integer $limit 
	 * @param string $order
	 * @param string $direction
	 * @return integer count
	 */
	public function get_comments_of_project($id, $offset = 0, $limit = 0, $order = 'comment_date', $direction = 'desc')
	{
		if ($id <= 0)
		{
			return -1;
		}

		$this->db->select('*');
		$this->db->from($this->TABLENAME);
		$this->db->join('users', "users.users_id = $this->TABLENAME.user_id");
		$this->db->where("$this->TABLENAME.projects_id", $id);
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

	/**
	 * Delete a comment of projects which id  
	 * is $id and procjects_id is $projects_id
	 *
	 * @access public
	 * @param integer $id
	 * @param integer $projects_id
	 * @return integer affect row  >= 0 succ, < 0 fail
	 */
	public function del_comment_of_project($id, $prodects_id)
	{
		if ($id <= 0 || $prodects_id <= 0)
		{
			return -1;
		}
		$this->db->trans_start();
		
		$this->db->delete($this->TABLENAME, array('projects_comment_id' => $id, 'projects_id' => $projects_id)); 

		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			// 生成一条错误信息... 或者使用 log_message() 函数来记录你的错误信息
			return -1;
		}
		else
		{
			return $this->db->affected_rows();	
		}
	}

	/**
	 * insert a comment of project 
	 *
	 * @access public
	 * @param array $data 
	 * @return integer affect row  >= 0 succ, < 0 fail
	 */
	public function insert_comment($data)
	{
		$this->db->trans_start();
		
		$this->db->insert($this->TABLENAME, $data);

		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			// 生成一条错误信息... 或者使用 log_message() 函数来记录你的错误信息
			return -1;
		}
		else
		{
			return $this->db->affected_rows();	
		}
	}

}
?>
