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
	public function get_all($offset = 0, $limit = 0, $order = 'name', $direction = 'desc')
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
}
?>
