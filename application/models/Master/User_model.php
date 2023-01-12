<?php
class User_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function view(){
                // $this->db->where("email" , $this->input->post("username"));
                // $this->db->where("password" , md5($this->input->post("password")));
                $db = $this->db->get("user");
                 return $db->result_array();
        }
        public function submitadd(){
                $param = $this->input->post();
                $param["password"] = password_hash($this->input->post("password") , PASSWORD_DEFAULT);
                $this->db->insert("user" , $param);
        }
        public function delete($id){
                $this->db->where("userCode" , $id);
                $this->db->delete("user");
        }

}