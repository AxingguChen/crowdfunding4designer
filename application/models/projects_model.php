<?php
/**
 * this class is used for projects
 * table doing curd
 * add by hongxinpeng
 * 2015-03-21
 */

class Projects_model extends CI_Model 
{
	private $TABLENAME = 'projects';

	public function __construct()
    {
        parent::__construct();
    }

	/**
	 * Get total count of projects table
	 *
	 * @access public
	 * @return integer count
	 */
	public function get_all_count()
	{
		$query = $this->db->count_all($this->TABLENAME);
		return $query;
	}

	/**
	 * Get records of projects which title
	 * contains $title
	 *
	 * @access public
	 * @param string $title
	 * @param integer $offset
	 * @param integer $limit 
	 * @param string $order
	 * @param string $direction
	 * @return array records 
	 */
	public function get_by_project_title($title, $offset = 0, $limit = 0, $order = 'title', $direction = 'desc')
	{
		if (strlen($title) <= 0)
		{
			return -1;
		}
		$this->db->select('*');
		$this->db->from($this->TABLENAME);
		$this->db->join('users', "users.id = $this->TABLENAME.users_id");
		$this->db->like('title', $title); 	
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
	 * Get records of projects which type
	 * of clothes like $clothes_type
	 *
	 * @access public
	 * @param string $clothes_type
	 * @param integer $offset
	 * @param integer $limit 
	 * @param string $order
	 * @param string $direction
	 * @return array records 
	 */
	public function get_by_clothes_type($clothes_type, $offset = 0, $limit = 0,
	   	$order = 'clothes_type_id', $direction = 'desc')
	{
		if (strlen($clothes_type) <= 0)
		{
			return -1;
		}

		$this->db->select('*');
		$this->db->from($this->TABLENAME);
		$this->db->join('clothes_type', "clothes_type.id = $this->TABLENAME.clothes_type_id");
		$this->db->join('users', "users.id = $this->TABLENAME.users_id");
		$this->db->like('clothes_type.name', $clothes_type); 	
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
	 * Get a record of projects which id  
	 * is $id
	 *
	 * @access public
	 * @param integer $id
	 * @return array records 
	 */
	public function get_by_id($id)
	{
		if ($id <= 0)
		{
			return -1;
		}
		$this->db->select('*');
		$this->db->from($this->TABLENAME);
		$this->db->join('users', "users.id = $this->TABLENAME.users_id");
		$this->db->where("$this->TABLENAME.id", $id);
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * Get all records of projects 
	 *
	 * @access public
	 * @param integer $offset
	 * @param integer $limit 
	 * @param string $order
	 * @param string $direction
	 * @return array records 
	 */
	public function get_all($offset = 0, $limit = 0, $order = 'id', $direction = 'desc')
	{
		$this->db->select('*');
		$this->db->from($this->TABLENAME);
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
	 * Get a record of projects which id  
	 * is $id
	 *
	 * @access public
	 * @param array $data 
	 * @return integer affect row  >= 0 succ, < 0 fail
	 */
	public function insert_project($data)
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

	public function updata_project($id, $data)
	{
		$this->db->trans_start();

		$this->db->where('id', $id);
		$this->db->update($this->TABLENAME, $data); 

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
