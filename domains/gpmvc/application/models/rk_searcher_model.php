<?php 
if(!defined('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_searcher_model extends CI_Model{
    public function finder($search){
        //select fio_s from soiskatel where fio_s  LIKE '%$search%' "; 
        $this->db->select('fio_s');
        $this->db->from('soiskatel');
        $this->db->like('fio_s',$search,'before');
        $sql=$this->db->get();
        //return $sql->result_array();
        //return $sql->row();
        return $sql->result_array();    
        //redirect(base_url().'search_cont/index','refresh');

    }
    public function sel_grid_data($search){
        //$sql ="select  data_reg, fio_s, data_rog, pol, gragd, adres_s, tel_s, obraz, stag, spec, sp 
        //from soiskatel where fio_s='$search'";
        $this->db->select('data_reg, fio_s, data_rog, pol, gragd, adres_s, tel_s, obraz, stag, spec, sp');
        $this->db->from('soiskatel');
        $this->db->where('fio_s',$search);
        //$this->db->like('fio_s',$search,'before');

        $sql=$this->db->get();
        return $sql->result_array();
        //return $sql->row();
    }
}
?>