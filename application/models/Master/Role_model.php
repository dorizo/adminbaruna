<?php
class Role_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function view(){
                // $this->db->where("email" , $this->input->post("username"));
                $this->db->where("deleteAt is NULL");
                $db = $this->db->get("role");
                 return $db->result_array();
        }
        public function viewSinggle($role){
            // $this->db->where("email" , $this->input->post("username"));
            // $this->db->where("password" , md5($this->input->post("password")));
            $this->db->where("roleCode" , $role);
            $db = $this->db->get("role");
             return $db->row();
        }
        public function submitadd(){
                $param = $this->input->post();
                // $param["password"] = password_hash($this->input->post("password") , PASSWORD_DEFAULT);
                $this->db->insert("role" , $param);
        }
        public function submitedit(){
                $param = $this->input->post();
                $this->db->where("roleCode" , $this->input->post("roleCode"));
                $this->db->update("role" , $param);
        }
        public function delete($id){
                $this->db->where("userCode" , $id);
                $this->db->delete("role");
        }

}