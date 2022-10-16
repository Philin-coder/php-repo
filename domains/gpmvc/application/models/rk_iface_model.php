<?php
class rk_iface_model extends CI_Model {
    public function sel_iface() {
        //SELECT COUNT(*) as total_records FROM vakansiya
        $sql="SELECT COUNT(*) as total_records FROM vakansiya";
        $res=$this->db->query($sql);
        return $res->row()->total_records;
        
    }
    public function sel_grid_data(){
        //"SELECT dolgn,oklad,tip_zan 
        //FROM vakansiya 
        //LIMIT $offset, $total_records_per_page")
        $this->db->select('dolgn,oklad,tip_zan');
        $this->db->from('vakansiya');
        $this->db->limit(4);
        $sql=$this->db->get();
        return $sql->result_array();

    }
}
?>