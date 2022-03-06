<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_to_layout_model extends CI_Model {
    public function get_oc_product_to_layout_model()
    {
        $this->db->select('model,
        oc_product_to_layout.store_id, 
        oc_product_to_layout.layout_id');
        $this->db->from('oc_product_to_layout');
        $this->db->join('oc_product','oc_product.product_id=oc_product_to_layout.product_id');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_oc_product_to_layout($store_id, $layout_id)
    {
        if(!empty($_POST))
        {        
            
                $data=array(
                    'store_id'=>$store_id, 
                    'layout_id'=>$layout_id

                );
                $this->db->insert('oc_product_to_layout',$data);
            
        }
    }
    public function upd_oc_product_to_layout($store_id, $layout_id)
    {
        $sql='update oc_product_to_layout set store_id=?, layout_id=?';
        $this->db->query($sql,array($store_id, $layout_id));
    }

public function del_oc_product_to_layout()
{
    $this->db->empty_table('oc_product_to_layout');
}


}
?>