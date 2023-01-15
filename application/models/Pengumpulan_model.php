<?php
class Pengumpulan_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function view(){
                $this->db->join("beli_sampah a" , "a.bsCode=c.bsCode");
                $this->db->join("mitra b" , "a.mitraCode=b.mitraCode");
                $this->db->join("jenis_sampah d" , "d.jsCode=c.jsCode");
                $this->db->order_by("c.dbsCode" , "DESC");
                $db = $this->db->get("detail_beli_sampah c");
                 return $db->result_array();
        }
        
        public function single(){
                $this->db->select("sum(c.berat) as berat,jenis ,c.jsCode");
                $this->db->join("beli_sampah a" , "a.bsCode=c.bsCode");
                $this->db->join("mitra b" , "a.mitraCode=b.mitraCode");
                $this->db->join("jenis_sampah d" , "d.jsCode=c.jsCode");
                $this->db->group_by("c.jsCode");
                $db = $this->db->get("detail_beli_sampah c");
                 return $db->result_array();
        }
        
        public function perjenis($jenis){
                $this->db->join("beli_sampah a" , "a.bsCode=c.bsCode");
                $this->db->join("mitra b" , "a.mitraCode=b.mitraCode");
                $this->db->join("jenis_sampah d" , "d.jsCode=c.jsCode");
                $this->db->where("d.jsCode" , $jenis);
                $this->db->order_by("c.dbsCode" , "DESC");
                $db = $this->db->get("detail_beli_sampah c");
                 return $db->result_array();
        }
}