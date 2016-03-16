<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        
        $this->load->database();
    }

    //get Hotel class by destination
    public function getHotelByDestination($where)
    {
    	$query = "SELECT h.`id`, h.`name`, d.`destination`, h.`description` FROM hotel h LEFT JOIN destination d ON h.`d_id`=d.`id`";
    	if($where != '0'){
    	 $query .= "WHERE d.`destination` LIKE '%$where%'";
    	}
        
    	$result = $this->db->query($query)->result();
		return $result;
    }

    //get Hotel class by id
    public function getHotelById($id)
    {
    	$query = "SELECT h.`id`, h.`name`, d.`destination`, h.`description` FROM hotel h LEFT JOIN destination d ON h.`d_id`=d.`id` WHERE h.`id` = $id";
		$result = $this->db->query($query)->row();
		return $result;
    }
}
