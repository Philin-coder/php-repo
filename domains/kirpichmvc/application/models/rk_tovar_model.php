<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class rk_tovar_model extends CI_Model{
    public function sel_tovar(){
        $this->db->select('id_tov,name_tovar,razmer,morozost,vodopogl,teploprovod,marka,massa,price,img,id_tipa,sost');
        $this->db->from('tovar');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_tovar($name_tovar,$razmer,$morozost,$vodopogl,$teploprovod,$marka,$massa,$price,$img,$id_tipa,$sost){
        if(!empty($_POST)){
            $data=array(
                'name_tovar'=>$name_tovar,
                'razmer'=>$razmer,
                'morozost'=>$morozost,
                'vodopogl'=>$vodopogl,
                'teploprovod'=>$teploprovod,
                'marka'=>$marka,
                'massa'=>$massa,
                'price'=>$price,
                'img'=>$img,
                'id_tipa'=>$id_tipa,
                'sost'=>$sost

            );
            $this->db->insert($data,tovar);
        }
        

    }
    public function upd_tovar($name_tovar,$razmer,$morozost,$vodopogl,$teploprovod,$marka,$massa,$price,$img,$id_tipa,$sost){
        $sql='update tovar set name_tovar=?,razmer=?,morozost=?,vodopogl=?,teploprovod=?,marka=?,massa=?,price=?,img=?,id_tipa=?,sost=?';
        $this->db->query($sql,array($name_tovar,$razmer,$morozost,$vodopogl,$teploprovod,$marka,$massa,$price,$img,$id_tipa,$sost));

    }
    public function del_tovar(){
        $this->db->empty_table('tovar');
    }
    public function sel_grid_data(){
        
        $this->db->select('name_tovar, razmer, img');
        $this->db->from('tovar');
        $sql=$this->db->get();
        return $sql->result_array();

}
}
?>