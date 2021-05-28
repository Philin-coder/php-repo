<?php
if (! defined ('BASEPATH')) exit('No Page');
class usver_Modek extends CI_Model{
   public function get_user()
    {
        $this->db->select('pass,login, mailer');
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

}