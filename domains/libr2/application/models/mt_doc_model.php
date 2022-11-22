<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class mt_doc_model extends CI_Model {
    public function sel_doc(){
        $this->db->select('ID_Doc,id_Book,status');
        $this->db->from('Doc');
        $sql=$this->db->get();
        return $sql->result_array();


    }
    public function ins_doc($id_Book,$status){
        if(!empty($_POST)){
            $data=array(
                'id_Book'=>$id_Book,
                'status'=>$status
            );
            $this->db->insert('Doc',$data);
        }
    }
    public function upd_doc($id_Book,$status){
        $sql='update doc set id_Book=?, Status=?';
        $this->db->query($sql,array($id_Book,$status));
    }
    public function del_doc(){
    $this->db->empty_table('doc');

}
}

?>