<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_rabotodatel_model extends CI_Model{
    public function sel_rabotodatel(){
        $this->db->select('id_r','naim_r','tel_r','kl_d','kl_fio','adres_r');
        $this->db->from('rabotodatel');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_rabotodatel_model($naim_r,$tel_r,$kl_d,$kl_fio,$adres_r){
        if(!empty($_POST)){
        $data=array(
            'naim_r'=>$naim_r,
            'tel_r'=>$tel_r,
            'kl_d'=>$kl_d,
            'kl_fio'=>$kl_fio,
            'adres_r'=>$adres_r
        );
        $this->db->insert('rabotodatel',$data);
    }
}
public function upd_rabotodatel_model($naim_r,$tel_r,$kl_d,$kl_fio,$adres_r){
    $sql='update rabotodatel set naim_r=?,tel_r=?,kl_d=?,kl_fio=?,$adres_r?';
    $this->db->query($sql,array($naim_r,$tel_r,$kl_d,$kl_fio,$adres_r));
}
public function del_rabotodatel_model(){
    $this->db->empty_table('rabotodatel');
}
public function sel_grid_data(){
    $this->db->select('id_r, naim_r, tel_r, kl_d, kl_fio, adres_r');
    $this->db->from('rabotodatel');
    $sql=$this->db->get();
    return $sql->result_array();

}

}
?>