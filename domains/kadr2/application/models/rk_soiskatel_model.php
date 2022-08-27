<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_soiskatel_model extends CI_Model{
    public function sel_soiskatel_model(){
        $this->db->select('id_s,data_reg,fio_s,data_rog,pol,gragd,adres_s,tel_s,obraz,stag,spec,sp');
        $this->db->from('soiskatel');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_soiskatel($data_reg,$fio_s,$data_rog,$pol,$gragd,$adres_s,$tel_s,$obraz,$stag,$spec,$sp){
        if(!empty($_POST))
        {
            $data=array(
                'data_reg'=>$data_reg,
                'fio_s'=>$fio_s,
                'data_rog'=>$data_rog,
                'pol'=>$pol,
                'gragd'=>$gragd,
                'adres_s'=>$adres_s,
                'tel_s'=>$tel_s,
                'obraz'=>$obraz,
                'stag'=>$stag,
                'spec'=>$spec,
                'sp'=>$sp

            );
            $this->db->insert('soiskatel',$data);
        }
    }
    public function upd_soiskatel_model($data_reg,$fio_s,$data_rog,$pol,$gragd,$adres_s,$tel_s,$obraz,$stag,$spec,$sp){
    $sql='update soiskatel set data_reg=?,fio_s=?,data_rog=?,pol=?,gragd=?,adres_s=?,tel_s=?,obraz=?,stag=?,spec=?,sp=?';
    $this->db->query($sql,array($data_reg,$fio_s,$data_rog,$pol,$gragd,$adres_s,$tel_s,$obraz,$stag,$spec,$sp));
    }
    public function del_soiskatel_(){
        $this->db->empty_table('soiskatel');
    }
}
?>