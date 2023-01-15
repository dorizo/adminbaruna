<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('mitra_model');
			if(!$this->session->userdata("userCode")){
				redirect('/login', 'refresh');
			}
	}


	public function index()
	{
		$data["result"] = $this->mitra_model->view();
		$data["titlepage"] = "Petugas";
		$data["pluginjs"] = "pengumpulan.js";
		$this->load->view('template/header' , $data);
		$this->load->view('mitra/view' , $data);
		$this->load->view('template/footer');
	}
	public function add(){

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('nik', 'nik', 'required');
		$data["titlepage"] = "Mitra ";
		if ($this->form_validation->run() === FALSE)
		{
			$data['fasilitator'] = $this->db->get('fasilitator')->result_array();
			$data['user'] = $this->db->query("select * from user where userCode NOT IN (select userCode from mitra) and deleteAt IS NULL order by email ASC")->result_array();
			$this->load->view('template/header' , $data);
			$this->load->view('mitra/add' , $data);
			$this->load->view('template/footer');

		}else{

			if ($_FILES["foto"]["name"]) {
			$path = './asset/ktp';
			$config['upload_path'] =  $path;
			$config['allowed_types'] = 'JPG|jpeg|jpg|png|PNG';
			$config['max_size'] = 1024 * 4;
			$new_name = time() . $_FILES["foto"]['name'];
			$config['file_name'] = $new_name;
			$this->load->library('upload', $config);
			$upload = $this->upload->do_upload('foto');
			if (!$upload) {
				// setflashdata('error_file', TRUE);
				// redirect('mitra');
				 $errors = $this->upload->display_errors();
                    var_dump($errors);
                    die();

			} else {
				$foto = $this->upload->data();
				$file_foto = $foto['file_name'];
				// $file_foto_old = post('foto_old');
				// $path = './assets/document/profil/' . $file_foto_old . '';
				// @unlink($path);
			}
		}
		
		$data = [
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'ktp' => $file_foto,
			'noHP' => $this->input->post('nohp'),
			'jenisKelamin' => $this->input->post('jeniskelamin'),
			'wilayahCode' => $this->input->post('wilayahcode'),
			'jenisMitra' => $this->input->post('jenismitra'),
			'tempatLahir' => $this->input->post('tempatlahir'),
			'tanggalLahir' => $this->input->post('tanggallahir'),
			'alamat' => $this->input->post('alamat'),
			'fasilitatorCode' => $this->input->post('fasilitator'),
			'userCode' => $this->input->post('user'),
			'createAt' => date('Y-m-d H:i:s')


		];
		
		$this->db->insert('mitra', $data);
			redirect('/mitra', 'refresh');
		}
	}
	// public function edit($id){

	// 	$this->form_validation->set_rules('email', 'email', 'required');
        
 //        $data["dataresult"] = $this->user_model->single($id);
 //        // $data["datajob"] = $this->job_model->view();
	// 	$data["titlepage"] = "Vendor : ";
	//    if ($this->form_validation->run() === FALSE)
 //        {
 //     	$this->load->view('template/header' , $data);
	// 	$this->load->view('master/user/edit' , $data);
	// 	$this->load->view('template/footer');
		
	// 	}else{
	// 		$this->user_model->submitedit();	
 //            redirect('/Master/user', 'refresh');
		
	// 	}
	// }


 //    public function delete($d){
 //        $this->user_model->delete($d);
 //        redirect('/Master/user', 'refresh');    
 //    }
}
