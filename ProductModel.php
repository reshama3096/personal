<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProductModel extends CI_Model{
		public function product_Info()
		{
			$this->db->select('*');
			$this->db->from('productlist');
			$query=$this->db->get();
			return $query->result_array();
			}
	}
?>