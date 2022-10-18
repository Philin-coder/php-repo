<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_work_model extends CI_Model{
    public function ins_rab($d_r, $naim_r, $tel_r, $kl_d, $kl_fio, $adres_r){
        if(!empty($_POST)){
            $data=array(
                'd_r'=>$d_r, 
                'naim_r'=>$naim_r, 
                'tel_r'=>$tel_r, 
                'kl_d'=>$kl_d, 
                'kl_fio'=>$kl_fio, 
                'adres_r'=>$adres_r

            );
            $this->db->insert('rabotodatel',$data);
        }
    }
    public function sel_grid_data(){
        //$sql = 'select id_r, d_r, naim_r, tel_r, kl_d, kl_fio, adres_r from rabotodatel ';		
        $this->db->select('id_r, d_r, naim_r, tel_r, kl_d, kl_fio, adres_r');
        $this->db->from('rabotodatel');
        $sql=$this->db->get();
        return $sql->result_array();
    }
}
?>