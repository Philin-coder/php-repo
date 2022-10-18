<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_search_resume_model extends CI_Model {
    public function find_res(){
        $search=$_POST['search'];
        //select fio_s from soiskatel where fio_s  LIKE '%$search%' 
        $this->db->select('fio_s');
        $this->db->from('soiskatel');
        $this->db->like('fio_s',$search);
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function sel_data_grid(){
        $search=$_POST['search'];
        //sql ="select  data_reg, fio_s, data_rog, pol, gragd, adres_s, tel_s, obraz, stag, spec, sp 
        //from soiskatel where fio_s='$search'"
        $this->db->select('data_reg, fio_s, data_rog, pol, gragd, adres_s, tel_s, obraz, stag, spec, sp');
        $this->db->from('soiskatel');
        $this->db->like('fio_s',$search);
        $sql=$this->db->get();
        return $sql->result_array();
    }
    
}
?>