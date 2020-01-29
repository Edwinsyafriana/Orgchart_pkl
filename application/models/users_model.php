<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	//public function tambah_user()
	//{
	//	$data = [
	//				'user' => $this->input->post('user'),
	//				'parent' => $this->input->post('parent'),
	//			];

	//	$this->db->insert('users', $data);
	//}

	public function getallUsers()
	{
		return $this->db->get('users')->result_array();
	}
	/** Fungsi CREATE */
	function input_data($data,$table){
	$this->db->insert($table,$data);
} 
	 /** Fungsi READ */
	function tampil_data(){
		return $this->db->get('user');
	}
	/** Fungsi UPDATE */
  
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	/** Fungsi DELETE */
  
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	  }
}
