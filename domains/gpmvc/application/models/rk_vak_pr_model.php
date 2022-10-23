<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class  rk_vak_pr_model extends CI_Model {
    public function reports($proff, $id_v) {
        //$sql="SELECT naim_r, tel_r, kl_fio, k_mest, dolgn, oklad 
        //FROM vakansiya, rabotodatel WHERE 
  //rabotodatel.id_r=vakansiya.id_r and 
  //dolgn LIKE '%".$proff."%' and data_razm<='$d_v'";  
$this->db->select('naim_r, tel_r, kl_fio, k_mest, dolgn, oklad');
$this->db->from('vakansiya');
$this->db->join('rabotodatel','rabotodatel.id_r=vakansiya.id_r');
$this->db->like('dolgn',$proff);
$this->db->where('data_razm<=',$id_v);//and..
$sql=$this->db->get();
return $sql->result_array();
}
}
?>