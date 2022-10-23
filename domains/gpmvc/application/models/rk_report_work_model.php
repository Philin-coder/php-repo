<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_report_work_model extends CI_Model{
    public function sel_data_grid($d_r){
        //"select id_r, d_r, naim_r, tel_r, kl_d, kl_fio, adres_r 
        //from rabotodatel where d_r<='$d_r'";		
        $this->db->select('id_r, d_r, naim_r, tel_r, kl_d, kl_fio, adres_r');
        $this->db->from('rabotodatel');
        $this->db->where('d_r<=',$d_r);
        $sql=$this->db->get();
        return $sql->result_array();

    }
}
?>