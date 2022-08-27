<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_otrasl_model extends CI_Model{
    public function sel_otrasl_model(){
        $this->db->select('id_o','naim_o');
        $this->db->from('otrasl');
        $sql = $this->this->db->get();
        return $sql->result_array();
    }
    public function ins_otrasl_model($naim_o){
        if(!empty($_POST))
        {
            $data=array(
                '$naim_o'=>$naim_o
            );
            $this->db->insert('otrasl',$data);

        }

    
    }

    public function upd_otrasl_model($naim_o){
    $sql='update napravlenie set nam_o=?';
    $this->db->query($sql,array($naim_o));      
    }

    public function del_otrasl(){
    $this->db->empty_table('otrasl');      
    }
}
?>