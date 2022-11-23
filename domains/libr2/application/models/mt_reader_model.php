<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class mt_reader_model extends CI_Model {
    public function sel_reader () {
        $this->db->select('ID_Reader,Name_R,Date_B,Adres,Tel,Date_R');
        $this->db->from('Reader');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_reader($Name_R,$Date_B,$Adres,$Tel,$Date_R) {
        if (!empty($_POST)){
            $data=array(
                'Name_R'=>$Name_R,
                'Date_B'=>$Date_B,
                'Adres'=>$Adres,
                'Tel'=>$Tel,
                'Date_R'=>$Date_R

            );
            $this->db->insert('Reader',$data);

        }
    }
    public function upd_reader($Name_R,$Date_B,$Adres,$Tel,$Date_R){
        $sql='update reader set Name_R=?,Date_B=?,Adres=?,$Tel=?,$Date_R=?';
        $this->db->query($sql,array(Name_R,$Date_B,$Adres,$Tel,$Date_R));
    }
    public function del_reader(){
        $this->db->empty_table('reader');
    }

}
?>