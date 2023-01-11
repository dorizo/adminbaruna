<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengumpulan extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('pengumpulan_model');
			if(!$this->session->userdata("userCode")){
				redirect('/login', 'refresh');
			}
	}


	public function index()
	{
		$data["result"] = $this->pengumpulan_model->view();
		$data["titlepage"] = "pengumpulan";
		$data["pluginjs"] = "pengumpulan.js";
		$this->load->view('template/header' , $data);
		$this->load->view('pengumpulan/view' , $data);
		$this->load->view('template/footer');
	}
	public function edit($id){

		$this->form_validation->set_rules('username', 'username', 'required');
        
        $data["dataresult"] = $this->pengumpulan_model->viewSinggle($id);
        // $data["datajob"] = $this->job_model->view();
		$data["titlepage"] = "Vendor : " . $data["dataresult"]->vendorName;
	   if ($this->form_validation->run() === FALSE)
        {
     	$this->load->view('template/header' , $data);
		$this->load->view('pengumpulan/edit' , $data);
		$this->load->view('template/footer');
		
		}else{
			$this->pengumpulan_model->submitedit();	
            redirect('/pengumpulan', 'refresh');
		
		}
	}

    public function add(){

		$this->form_validation->set_rules('username', 'username', 'required');
      $data["titlepage"] = "PROYEK ";
	   if ($this->form_validation->run() === FALSE)
        {
     	$this->load->view('template/header' , $data);
		$this->load->view('pengumpulan/add' , $data);
		$this->load->view('template/footer');
		
		}else{
			$this->pengumpulan_model->submitadd();	
            redirect('/pengumpulan', 'refresh');
		}
	}
    public function delete($d){
        $this->pengumpulan_model->delete($d);
        redirect('/pengumpulan', 'refresh');    
    }
}
