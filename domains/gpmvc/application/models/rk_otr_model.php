<?php 
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_otr_model extends CI_Model{
    public function ins_otr($naim_o){
        if(!empty($_POST)){
            $data=array(
                'naim_o'=>$naim_o
            );
            $this->db->insert('otrasl',$data);
        }
    }
    public function sel_grid_data(){
        //select id_o, naim_o from otrasl 
        $this->db->select('id_o, naim_o');
        $this->db->from('otrasl');
        $sql=$this->db->get();
        return $sql->result_array();
    }
}
?>