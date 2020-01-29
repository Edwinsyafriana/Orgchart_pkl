<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_chart extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');

	}

	function getuser(){
		$data['getuser']=$this->users_model->getallUsers()->result();
		
		//$this->load->view('v_org',$data);
	}

	public function lihatdata()
	{
		$data['database'] = $this->users_model->getallUsers();

		$data['title'] = "Struktur Organisasi";


		$this->load->view('v_org', $data);

	}
}
