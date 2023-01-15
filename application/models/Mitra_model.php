<?php
class Mitra_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function single($role){
                // $this->db->where("email" , $this->input->post("username"));
                // $this->db->where("password" , md5($this->input->post("password")));
                $this->db->where("mitraCode" , $role);
                $db = $this->db->get("mitra");
                 return $db->row();
            }
        public function view(){
                // $this->db->where("email" , $this->input->post("username"));
                // $this->db->where("password" , md5($this->input->post("password")));
                $this->db->where("deleteAt is NULL");
                $db = $this->db->get("mitra");
                 return $db->result_array();
        }
        public function submitadd(){
                $param = $this->input->post();
                $param["password"] = password_hash($this->input->post("password") , PASSWORD_DEFAULT);
                //$this->db->insert("user" , $param);
        }
        public function submitedit(){
                $param = $this->input->post();
                $this->db->where("mitraCode" , $this->input->post("mitraCode"));
                $this->db->update("mitra" , $param);
        }
        public function delete($id){

                $this->db->where("mitraCode" , $id);
                $this->db->update("mitra");
        }

}