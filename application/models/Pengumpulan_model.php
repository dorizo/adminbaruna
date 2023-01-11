<?php
class Pengumpulan_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function view(){
                $this->db->join("beli_sampah a" , "a.bsCode=c.bsCode");
                $this->db->join("mitra b" , "a.mitraCode=b.mitraCode");
                $db = $this->db->get("detail_beli_sampah c");
                 return $db->result_array();
        }
}