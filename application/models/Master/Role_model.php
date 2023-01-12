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
        public function single(){
            // $this->db->where("email" , $this->input->post("username"));
            // $this->db->where("password" , md5($this->input->post("password")));
            $this->db->where("roleCode" , $role);
            $db = $this->db->get("role");
             return $db->row();
        }
        public function submitadd(){
                $param = $this->input->post();
                $param["password"] = password_hash($this->input->post("password") , PASSWORD_DEFAULT);
                $this->db->insert("role" , $param);
        }
        public function delete($id){
                $this->db->where("userCode" , $id);
                $this->db->delete("role");
        }

}