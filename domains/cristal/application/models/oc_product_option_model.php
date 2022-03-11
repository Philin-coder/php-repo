<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_option_model extends CI_Model {
    public function get_oc_product_option()
    {
        $this->db->select('oc_product_option.product_option_id,
         model,
         oc_product_option.option_id,
         oc_product_option.value, 
         oc_product_option.required');
        $this->db->from('oc_product_option');
        $this->db->join('oc_product','oc_product.product_id=oc_product_option.product_id');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_oc_product_option($product_id,$option_id,$value, $requested)
    {
        if(!empty($_POST))
        {
            $data=array(
                'product_id'=>$product_id,
                'option_id'=>$option_id,
                'value'=>$value, 
                'requested'=>$requested

            );
            $this->db->insert('oc_product_option',$data);
        }
    }
    public function upd_oc_product_option($product_id,$option_id,$value, $requested)
    {
        $sql='update oc_product_option set product_id=?,option_id=?,value=?, requested=?';
        $this->db->query($sql,array($product_id,$option_id,$value, $requested));
    }
    public function del_oc_product_option()
    {
        $this->db->empty_table('oc_product_option');
    }
    public function oc_product_option_model_get_xml()
    {
        $this->db->select('oc_product_option.product_option_id,
         model,
         oc_product_option.option_id,
         oc_product_option.value, 
         oc_product_option.required');
        $this->db->from('oc_product_option');
        $this->db->join('oc_product','oc_product.product_id=oc_product_option.product_id');
        $sql=$this->db->get();
        return $sql;

    }

}

?>