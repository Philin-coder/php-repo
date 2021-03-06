<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_to_store_model extends CI_Model{
    public function get_oc_product_to_store()
    {
        $this->db->select('model, 
        oc_product_to_store.store_id');
        $this->db->from('oc_product_to_store');
        $this->db->join('oc_product','oc_product.product_id=oc_product_to_store.product_id');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_oc_product_to_store($store_id)
    {
        if (!empty($_POST))
        {
            $data = array(
                'store_id'=>$store_id


            );
            $this->db->insert('oc_product_to_store',$data);
        }


    }
    public function upd_oc_product_to_store($store_id)
    {
        $sql='update oc_product_to_store set oc_product_to_store.store_id=?';
        $this->db->query($sql,array($store_id));
    }
    public function del_oc_product_to_store($store)
    {
        $this->db->empty_table('oc_product_to_store');
    }
    public function oc_product_to_store_model_get_xml()
    {
        $this->db->select('model, 
        oc_product_to_store.store_id');
        $this->db->from('oc_product_to_store');
        $this->db->join('oc_product','oc_product.product_id=oc_product_to_store.product_id');
        $sql=$this->db->get();
        return $sql;      
    }

}
?>