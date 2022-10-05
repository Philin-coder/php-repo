<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class st_grup_model extends CI_Model{
    public function sel_grup(){
        $this->db->select('id_grupp,name_grup,spec');
        $this->db->from('gruppa');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_gruppa($name_grup,$spec){
        if (!empty($_POST)){
        $data=array(
            'name_grup'=>$name_grup,
            'spec'=>$spec

        );
        $this->db->insert('gruppa',$data);
    }

    
    }
    public function upd_gruppa($name_grup,$spec){
        $sql='update gruppa set name_grup=?, spec=?';
        $this->db->query($sql,array($name_grup,$spec));
    }
    public function del_gruppa(){
        $this->db->empty_table('del_gruppa');
    }
}
?>