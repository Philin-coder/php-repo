<?php
if (! defined ('BASEPATH')) exit('No Page');
class usver_Model extends CI_Model{
   public function get_user()
    {
        $this->db->select('usver_id,pass,login, mailer');
        $this->db->from('usver');
        $sql=$this->db->get()
        return  $sql->reset_array();  
    }
    public function ins_usver($pass,$login, $mailer )
    {
    $data=array(
        'pass'=>$pass,
        'login'=>$login, 
        'mailer'=>$mailer

    );
    $this->db->insert('usver',$data);
    }
    public function upd_usver($id, $pass,$login, $mailer){
if(!empty($_POST))
{
    $data=array(
        'pass'=>$pass,
        'login'=>$login, 
        'mailer'=>$mailer

    );
    $this->db->where('usver_id',$data);
    $this->db->update('usver',$data);
    
}
}

}