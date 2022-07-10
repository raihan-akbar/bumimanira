<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mc extends CI_Model {
	function get($table,$where){
		return $this->db->get_where($table,$where);
	}
	function add($data,$table){
		$this->db->insert($table,$data);
	}
	function del($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function upd($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function get_all_article(){
		return $this->db->query(" SELECT * FROM article "); 
	}
	
}

/* End of file mc.php */
/* Location: ./application/models/mc.php */