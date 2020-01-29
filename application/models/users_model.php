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
		return $this->db->get('users')->result();
	}
	
}
