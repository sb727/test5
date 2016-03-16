<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        
        $this->load->database();
    }

    //check login information
	public function isUser($userid, $password){
		$query = "SELECT id, userid FROM USER WHERE userid='$userid' AND PASSWORD=MD5('$password')";
		$result = $this->db->query($query)->row();
		return $result;
	}
}
