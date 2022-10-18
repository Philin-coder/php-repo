<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');    
class rk_add_vakan_model extends CI_Model{
    public function ins_vakasia($id_r, $dolgn, $k_mest, $oklad, $tip_zan, $data_razm, $id_p){
        if(!empty($_POST)){
            $data=array(
                'id_r'=>$id_r, 
                'dolgn'=>$dolgn, 
                'k_mest'=>$k_mest, 
                'oklad'=>$oklad, 
                'tip_zan'=>$tip_zan, 
                'data_razm'=>$data_razm, 
                'id_p'=>$id_p
            );
            $this->db->insert('vakansiya',$data);
        }
    }
    public function sel_grid_data(){
        //$sql = 'select naim_r, dolgn, k_mest, oklad, tip_zan, data_razm, naim_p 
        //from vakansiya, rabotodatel, prof 
        //where rabotodatel.id_r=vakansiya.id_r 
        //and prof.id_p=vakansiya.id_p
        $this->db->select('naim_r, dolgn, k_mest, oklad, tip_zan, data_razm, naim_p');
        $this->db->from('vakansiya');
        $this->db->join('rabotodatel','rabotodatel.id_r=vakansiya.id_r');
        $this->db->join('prof','prof.id_p=vakansiya.id_p');
        $sql = $this->db->get();
        return $sql->result_array();
    }
}
?>