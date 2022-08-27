<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_vakansiya_model extends CI_Model{
    public function sel_rk_vakansiya_model()
    {
        $this->db->select('id_v,id_r,dolgn,k_mest, oklad,tip_zan,data_razm,id_p');
        $this->db->from('vakansiya');
        $sql = $this->db->get();
        return $sql->result_array();
    }
    public function ins_rk_vakansiya_model($id_r,$dolgn,$k_mest, $oklad,$tip_zan,$data_razm,$id_p){
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
    public function upd_vakansiya_model($id_r,$dolgn,$k_mest, $oklad,$tip_zan,$data_razm,$id_p){
    $sql='update vakansiya set id_r=?,dolgn=?,k_mest=?, oklad=?,tip_zan=?,data_razm=?,id_p?';
    $this->db->query($sql,array($id_r,$dolgn,$k_mest, $oklad,$tip_zan,$data_razm,$id_p));
    }

    public function del_vakansiya_model(){
        $this->db->empty_table('vakansiya');
    }
}
?>