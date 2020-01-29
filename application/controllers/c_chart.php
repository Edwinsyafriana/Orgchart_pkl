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
		$_json = array();

		foreach ($this->users_model->getallUsers() as $key => $value) {
			if($value["id"] == 0) {
				$_json[] = array(
		            "id" => $value["id"],
		            "name" => $value["name"],
		            "title" => $value["title"],
		            "email" => $value["email"],
		            "img" => $value["img"]
	          	);
			} else {
				$_json[] = array(
		            "id" => $value["id"],
		            "name" => $value["name"],
		            "title" => $value["title"],
		            "email" => $value["email"],
		            "img" => $value["img"],
		            "pid" => $value["pid"]
	          	);
			}
        }
		
		//$data['database'] = $this->users_model->getallUsers();

        $data['database'] = $_json;

		
		$data['title'] = "Struktur Organisasi";


		$this->load->view('v_org', $data);

	}
	 /** Fungsi CREATE */
  
	 function tambah(){
		$this->load->view('view_create');
	}
	function tambah_aksi(){
		$name = $this->input->post('nama');
		$title = $this->input->post('title');
		$email = $this->input->post('email');
		$img = $this->input->post('img');
 
		$data = array(
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->modelapp->input_data($data,'user');
	}
	/** Fungsi READ */
  
	function index(){
		$data['user'] = $this->modelapp->tampil_data()->result();
		$this->load->view('view',$data);
	}
}
