<?php
if(! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_users_model extends CI_Model{
    public function sel_rk_users_model(){
        $this->db->select('id_user,login,password,fio_user,status');
        $this->db->from('users');
        $sql=$this->db->get();
        //return $sql->result_array();
        return $sql->row();
    }
    public function ins_rk_users_model($login,$password,$fio_user,$status){
        if(!empty($_POST))
        {
            $data=array(
                'login'=>$login,
                'password'=>$password,
                'fio_user'=>$fio_user,
                'status'=>$status
            );
            $this->db->insert('users',$data);
        }


    }
    public function upd_rk_users_model($login,$password,$fio_user,$status){
        $sql='update users set login=?, password=?, fio_user=?, status=?';
        $this->db->query($sql,array($login,$password,$fio_user,$status));
    }
    public function del_rk_users_model(){
        $this->db->empty_table('users');

    }
    public function sel_stat($login, $password){
        $this->db->select('id_user,login,password,fio_user,status');
        $this->db->from('users');
        $this->db->where('login',$login);
        $this->db->where('password',$password);
        $sql=$this->db->get();
        return $sql->row();

    }
    
    
}
?>