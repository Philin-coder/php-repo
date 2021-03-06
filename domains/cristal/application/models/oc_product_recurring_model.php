<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_recurring_model extends CI_Model {
    public function get_oc_product_recurring_model()
    {
        $this->db->select('model, 
        oc_product_recurring.recurring_id,
        oc_product_recurring.customer_group_id');
        $this->db->from('oc_product_recurring');
        $this->db->join('oc_product','oc_product.product_id=oc_product_recurring.product_id');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_oc_product_recurring($recurring_id,$customer_group_id)
    {
        if(!empty($_POST))
        {
        $data=array(
            'recurring_id'=>$recurring_id,
            'customer_group_id'=>$customer_group_id

        );
        $this->db->insert('oc_product_recurring',$data);
    }
    }
    public function upd_oc_product_recurring($recurring_id,$customer_group_id)
    {
    $sql='update oc_product_recurring set recurring_id=?,customer_group_id=?';
    $this->db->query($sql,array($recurring_id,$customer_group_id));
    }
    public function delete_oc_product_recurring()
    {
        $this->db->empty_table('oc_product_recurring');
    }
    public function oc_product_recurring_model_get_xml()
    {
        $this->db->select('model, 
        oc_product_recurring.recurring_id,
        oc_product_recurring.customer_group_id');
        $this->db->from('oc_product_recurring');
        $this->db->join('oc_product','oc_product.product_id=oc_product_recurring.product_id');
        $sql=$this->db->get();
        return $sql;

    }

}
?>