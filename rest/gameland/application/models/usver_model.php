<?php
defined('BASEPATH') or exit('No page');
class usver_model extends CI_Model{
    public function ins_user($usver_pass,$usver_login){
    if(!empty($_POST))
        {

        
        $data=array(
            'usver_pass'=>$usver_pass,
            'usver_login'=>$usver_login
        );
        

        $this->db->insert('sm.usver',$data);
        return $data;
    }


}
public function sel_user(){
    $sql=$this->db->get('sm.usver');
    return $sql->result_array();
}
public function del_uder($id_usver)
{
    $sql='delete * from sm.usver where id_usver=?';
    $this->db->delete($sql,array($id_usver));
}
public function upd_usver($id_usver,$usver_pass)
{
    $sql='update sm.usver.usver_pass=? where id_usver=?';
    $this->db->query($sql,array($id_usver,$usver_pass));
    

}

}