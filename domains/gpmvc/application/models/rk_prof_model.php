<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_prof_model extends CI_Model{
    public function ins_prof($naim_o,$naim_p){
        if(!empty($_POST)){
            $data=array(
                'id_o'=>$naim_o,
                'naim_p'=>$naim_p


            );
            $this->db->insert('prof',$data);
        }

    }
    public function sel_grid_data(){
        //'select  naim_o, naim_p from otrasl, 
        //prof where otrasl.id_o=prof.id_o'
        $this->db->select('naim_o, naim_p');
        $this->db->from('otrasl');
        $this->db->join('prof', 'prof.id_o=otrasl.id_o');
        $sql=$this->db->get();
        return $sql->result_array();
    }
}
?>