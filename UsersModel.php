<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UsersModel extends CI_Model{

	public function getdata(){
		//query 
		$this->db->select('*');
		$this->db->from('userslist');
		$query = $this->db->get();
		/*echo $this->db->last_query();
		die();*/
		return $query->result_array();
		// select * from userslist
	}

}
