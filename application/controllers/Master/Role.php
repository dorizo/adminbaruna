<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Master/role_model');
			if(!$this->session->userdata("userCode")){
				redirect('/login', 'refresh');
			}
	}


	public function index()
	{
		$data["result"] = $this->role_model->view();
		$data["titlepage"] = "Role";
		$data["pluginjs"] = "pengumpulan.js";
		$this->load->view('template/header' , $data);
		$this->load->view('master/role/view' , $data);
		$this->load->view('template/footer');
	}
	public function edit($id){

		$this->form_validation->set_rules('role', 'role', 'required');
        
        $data["dataresult"] = $this->role_model->viewSinggle($id);
        // $data["datajob"] = $this->job_model->view();
		$data["titlepage"] = "Vendor : ";
	   if ($this->form_validation->run() === FALSE)
        {
     	$this->load->view('template/header' , $data);
		$this->load->view('master/role/edit' , $data);
		$this->load->view('template/footer');
		
		}else{
			$this->role_model->submitedit();	
            redirect('/Master/role', 'refresh');
		
		}
	}

    public function add(){

		$this->form_validation->set_rules('role', 'role', 'required');
      $data["titlepage"] = "PROYEK ";
	   if ($this->form_validation->run() === FALSE)
        {
     	$this->load->view('template/header' , $data);
		$this->load->view('master/role/add' , $data);
		$this->load->view('template/footer');
		
		}else{
			$this->role_model->submitadd();	
            redirect('/Master/role', 'refresh');
		}
	}
    public function delete($d){
        $this->role_model->delete($d);
        redirect('/Master/role', 'refresh');    
    }
}
