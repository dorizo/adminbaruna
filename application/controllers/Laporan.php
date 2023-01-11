<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('laporan_model');
			if(!$this->session->userdata("userCode")){
				redirect('/login', 'refresh');
			}
	}


	public function index()
	{
		$data["result"] = $this->laporan_model->view();
		$data["titlepage"] = "Laporan";
		$data["pluginjs"] = "vendor.js";
		$this->load->view('template/header' , $data);
		$this->load->view('laporan/view' , $data);
		$this->load->view('template/footer');
	}
	public function edit($id){

		$this->form_validation->set_rules('username', 'username', 'required');
        
        $data["dataresult"] = $this->laporan_model->viewSinggle($id);
        // $data["datajob"] = $this->job_model->view();
		$data["titlepage"] = "Vendor : " . $data["dataresult"]->vendorName;
	   if ($this->form_validation->run() === FALSE)
        {
     	$this->load->view('template/header' , $data);
		$this->load->view('laporan/edit' , $data);
		$this->load->view('template/footer');
		
		}else{
			$this->laporan_model->submitedit();	
            redirect('/Laporan', 'refresh');
		
		}
	}

    public function add(){

		$this->form_validation->set_rules('username', 'username', 'required');
      $data["titlepage"] = "PROYEK ";
	   if ($this->form_validation->run() === FALSE)
        {
     	$this->load->view('template/header' , $data);
		$this->load->view('laporan/add' , $data);
		$this->load->view('template/footer');
		
		}else{
			$this->laporan_model->submitadd();	
            redirect('/Laporan', 'refresh');
		}
	}
    public function delete($d){
        $this->laporan_model->delete($d);
        redirect('/Laporan', 'refresh');    
    }
}
