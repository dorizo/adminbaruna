<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
			parent::__construct();
			$this->load->model("pengumpulan_model");
			if(!$this->session->userdata("userCode")){
				redirect('/login', 'refresh');
			}
			// print_r($user_logged_in);
			
	}

	public function index()
	{
		$data["resultdata"] = $this->pengumpulan_model->perjenis(1);
		$data["titlepage"] = "HOME";
		$data["pluginjs"] = "home.js?1";
		$data["result"]=$this->pengumpulan_model->single();
		$this->load->view('template/header' , $data);
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}

	public function jenis($id){
		
		$data["resultdata"] = $this->pengumpulan_model->perjenis($id);
		$data["result"]=$this->pengumpulan_model->single();
		$data["titlepage"] = "pengumpulan";
		$data["pluginjs"] = "pengumpulan.js";
		$this->load->view('template/header' , $data);
		$this->load->view('home' , $data);
		$this->load->view('template/footer');

	}
}
