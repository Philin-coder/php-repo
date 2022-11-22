<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class mt_author_model extends CI_Model{
    public function sel_author() {
        $this->db->select('ID_Author,Name_A');
        $this->db->from('Author');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_author($Name_A) {
        if(!empty($_POST)){
        $data=array(
            'Name_A'=>$Name_A
        );
    }
    $this->db->insert('Author',$data);
    }
    public function upd_author($Name_A){
        $sql='update Author set Name_A=?';
        $this->db->query($sql,array($Name_A));
    }
    public function del_author(){
        $this->db->empty_table('author');
    }
}
?> 