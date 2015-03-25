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
		$this->db->join('users', "users.users_id = $this->TABLENAME.projects_users_id");
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
	 * @param string $clothes_type_id
	 * @param integer $offset
	 * @param integer $limit 
	 * @param string $order
	 * @param string $direction
	 * @return array records 
	 */
	public function get_by_clothes_type_id($clothes_type_id, $offset = 0, $limit = 0,
	   	$order = 'projects_clothes_type_id', $direction = 'desc')
	{
		if ($clothes_type_id <= 0)
		{
			return -1;
		}

		$this->db->select('*');
		$this->db->from($this->TABLENAME);
		$this->db->join('clothes_type', "clothes_type.clothes_type_id = $this->TABLENAME.projects_clothes_type_id");
		$this->db->join('users', "users.users_id = $this->TABLENAME.projects_users_id");
		//$this->db->like('clothes_type.name', $clothes_type); 	
		$this->db->where('clothes_type.clothes_type_id', $clothes_type_id); 	
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
	 * Get records of projects which style
	 * of clothes like $clothes_style
	 *
	 * @access public
	 * @param string $clothes_style_id
	 * @param integer $offset
	 * @param integer $limit
	 * @param string $order
	 * @param string $direction
	 * @return array records
	 */
	public function get_by_clothes_style_id($clothes_style_id, $offset = 0, $limit = 0,
			$order = 'projects_clothes_style_id', $direction = 'desc')
	{
		if ($clothes_style_id < 0)
		{
			return -1;
		}
		//select all if id = 0
		else if ($clothes_style_id == 0)
		{
			$this->db->select('*');
			$this->db->from($this->TABLENAME);
			$this->db->join('clothes_style', "clothes_style.clothes_style_id = $this->TABLENAME.projects_clothes_style_id");
			$this->db->join('users', "users.users_id = $this->TABLENAME.projects_users_id");
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
			
		else 
		{
			$this->db->select('*');
			$this->db->from($this->TABLENAME);
			$this->db->join('clothes_style', "clothes_style.clothes_style_id = $this->TABLENAME.projects_clothes_style_id");
			$this->db->join('users', "users.users_id = $this->TABLENAME.projects_users_id");
			//$this->db->like('clothes_style.name', $clothes_style);
			$this->db->where('clothes_style.clothes_style_id', $clothes_style_id);
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
		$this->db->join('users', "users.users_id = $this->TABLENAME.projects_users_id");
		$this->db->where("$this->TABLENAME.projects_id", $id);
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
	public function get_all($offset = 0, $limit = 0, $order = 'projects.projects_id', $direction = 'desc')
	{
		$this->db->select('*');
		$this->db->from($this->TABLENAME);
		$this->db->join('users', "users.users_id = $this->TABLENAME.projects_users_id");
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
	 * insert a record of projects
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
			// 鐢熸垚涓�鏉￠敊璇俊鎭�... 鎴栬�呬娇鐢� log_message() 鍑芥暟鏉ヨ褰曚綘鐨勯敊璇俊鎭�
			return -1;
		}
		else
		{
			return $this->db->affected_rows();	
		}
	}

	/**
	 * Update a record of projects which id  
	 * is $id using data
	 *
	 * @access public
	 * @param integer $id project_id
	 * @param array $data 
	 * @return integer affect row  >= 0 succ, < 0 fail
	 */
	public function update_project($id, $data)
	{
		$this->db->trans_start();

		$this->db->where('projects_id', $id);
		$this->db->update($this->TABLENAME, $data); 

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

	/**
	 * Delete a record of projects which id  
	 * is $id
	 *
	 * @access public
	 * @param integer $id
	 * @return integer affect row  >= 0 succ, < 0 fail
	 */
	public function del_project($id)
	{
		$this->db->trans_start();
		
		$this->db->delete($this->TABLENAME, array('projects_id' => $id)); 

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

	/**
	 * Update a record of projects which id  
	 * is $id using data
	 *
	 * @access public
	 * @param integer $id project_id
	 * @param array $data 
	 * @return integer affect row  >= 0 succ, < 0 fail
	 */
	public function updata_project($id, $data)
	{
		$this->db->trans_start();

		$this->db->where('projects_id', $id);
		$this->db->update($this->TABLENAME, $data); 

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
