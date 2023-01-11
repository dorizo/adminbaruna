<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
			parent::__construct();
			if(!$this->session->userdata("userCode")){
				redirect('/login', 'refresh');
			}
			// print_r($user_logged_in);
			
	}

	public function index()
	{
		$data["titlepage"] = "HOME";
		$data["pluginjs"] = "home.js?1";
		$this->load->view('template/header' , $data);
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}
}
