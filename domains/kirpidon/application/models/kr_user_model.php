<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class kr_user_model extends CI_Model {
    public function sel_user(){
        $this->db->select('id_user,fio,email,login,parol,rol');
        $this->db->from('user');
        $sql = $this->db->get();
        return $sql->result();
    }
public function ins_user($fio,$milo,$login,$pass,$status){
    if(!empty($_POST)){
        $data=array(
            'fio'=>$fio,
            'email'=>$milo,
            'login'=>$login,
            'parol'=>$pass,
            'rol'=>$status
        );
        $this->db->insert('user',$data);
    }
    
}
public function sel_data_grid(){
    $this->db->select('id_user,fio,email,login,parol,rol');
    $this->db->from('user');
    $sql=$this->db->get();
    return $sql->result_array();
}
}
?>