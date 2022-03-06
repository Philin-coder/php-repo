<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_discount_model extends CI_Model {
    public function get_oc_product_discount()
    {
        $this->db->select('oc_product_discount.product_discount_id, 
        model, 
        oc_product_discount.customer_group_id,
         oc_product_discount.quantity,
         oc_product_discount.priority,
         oc_product_discount.price, 
         oc_product_discount.date_start,
         oc_product_discount.date_end');
        $this->db->from('oc_product_discount');
        $this->db->join('oc_product','oc_product.product_id=oc_product_discount.product_id');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_product_discount($customer_group_id,$quantity,$priority,$price, $date_start,$date_end)
    {
        if (!empty($_POST))
        {
            $data = array(
                'customer_group_id'=>$customer_group_id,
                'quantity'=>$quantity,
                'priority'=>$priority,
                'price'=>$price, 
                'date_start'=>$date_start,
                'date_end'=>$date_end

            );
            $this->db->insert('product_discount',$data);
        }

    }
    public function upd_product_discount($customer_group_id,$quantity,$priority,$price, $date_start,$date_end)
    {
        $sql='update oc_product_discount set customer_group_id=?,quantity=?,priority=?,price=?, date_start=?,date_end=?';
        $this->db->query($sql,array($customer_group_id,$quantity,$priority,$price, $date_start,$date_end));
    }
    public function del_oc_product_discount()
    {
        $this->db->empty_table('oc_product_discount');
    }



}
?>