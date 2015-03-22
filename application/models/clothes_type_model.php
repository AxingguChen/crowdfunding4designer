<?php
/**
 * this class is used for clothes_type
 * table doing curd
 * add by hongxinpeng
 * 2015-03-22
 */

class Clothes_type_model extends CI_Model 
{
	private $TABLENAME = 'clothes_type';

	public function __construct()
    {
        parent::__construct();
    }

	/**
	 * Get total count of table
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
	 * Get all records 
	 *
	 * @access public
	 * @param integer $offset
	 * @param integer $limit 
	 * @param string $order
	 * @param string $direction
	 * @return array records 
	 */
	public function get_all($offset = 0, $limit = 0, $order = 'clothes_type_name', $direction = 'desc')
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
	 * Get a record which id  
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
		$this->db->where("$this->TABLENAME.clothes_type_id", $id);
		$query = $this->db->get();
		return $query->result();
	}
	
}
?>
