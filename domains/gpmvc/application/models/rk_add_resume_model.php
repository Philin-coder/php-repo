<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_add_resume_model extends CI_Model{
    public function ins_resume($data_reg,$fio_s,$data_rog,$pol,$gragd,$adres_s,$tel_s,$obraz,$stag,$spec,$sp){
        if(!empty($_POST)){
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
    
}

?>