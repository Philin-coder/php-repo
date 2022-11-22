<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class mt_genre_model extends CI_Controller {
    public function sel_genre() {
        $this->db->select('ID_Genre,Name_G');
        $this->db->from('Genre');
        $sql=$this->db->get();
        return $sql->results_array();
    }
    public function ins_genre($name_G){
        if (!empty($_POST)){
            $data=array(
                'name_G'=>$name_G
            );
            $this->db->insert('Genre',$data);
        }
    }
    public function upd_genre($name_G){
        $sql='update genre set Name_G=?';
        $this->db->query($sql,array($name_G));
    }
    public function del_genre(){
        $this->db->empty_table('Genre');
    }
}
?>