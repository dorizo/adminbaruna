<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Master/user_model');
			if(!$this->session->userdata("userCode")){
				redirect('/login', 'refresh');
			}
	}


	public function index()
	{
		$data["result"] = $this->user_model->view();
		$data["titlepage"] = "user";
		$data["pluginjs"] = "pengumpulan.js";
		$this->load->view('template/header' , $data);
		$this->load->view('master/user/view' , $data);
		$this->load->view('template/footer');
	}
	public function edit($id){

		$this->form_validation->set_rules('username', 'username', 'required');
        
        $data["dataresult"] = $this->user_model->viewSinggle($id);
        // $data["datajob"] = $this->job_model->view();
		$data["titlepage"] = "Vendor : " . $data["dataresult"]->vendorName;
	   if ($this->form_validation->run() === FALSE)
        {
     	$this->load->view('template/header' , $data);
		$this->load->view('master/user/edit' , $data);
		$this->load->view('template/footer');
		
		}else{
			$this->user_model->submitedit();	
            redirect('/master/user', 'refresh');
		
		}
	}

    public function add(){

		$this->form_validation->set_rules('email', 'email', 'required');
      $data["titlepage"] = "PROYEK ";
	   if ($this->form_validation->run() === FALSE)
        {
     	$this->load->view('template/header' , $data);
		$this->load->view('master/user/add' , $data);
		$this->load->view('template/footer');
		
		}else{
			$this->user_model->submitadd();	
            redirect('/master/user', 'refresh');
		}
	}
    public function delete($d){
        $this->user_model->delete($d);
        redirect('/master/user', 'refresh');    
    }
}
