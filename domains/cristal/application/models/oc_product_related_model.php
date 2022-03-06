<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_related_model extends CI_Model {
    public function get_oc_product_related()
    {
        $this->db->select('model, oc_product_related.related_id');
        $this->db->from('oc_product_related');
        $this->db->join('oc_product','oc_product.product_id=oc_product_related.product_id');
        $sql=$this->db->get();
        return $sql->result_array();
        
    }
    public function ins_oc_product_related($related_id)
    {
        if(!empty($_POST))
        {
        $data=array(
            'related_id'=>$related_id
    );
    $this->db->insert('oc_product_related',$data);
    }
}
    public function upd_oc_product_related($related_id)
    {
        $sql='update oc_product_related set related_id=?';
        $this->db->query($sql,array($related_id));
    }
    public function del_oc_product_related()
    {
        $this->db->empty_table('oc_product_related');
    }




}

?>