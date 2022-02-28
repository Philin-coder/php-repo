<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_special_model extends CI_Model {
    public function get_oc_product_special()
    {
        $this->db->select('oc_product_special.product_special_id, 
        oc_product_special.product_id, 
        oc_product_special.customer_group_id, 
        oc_product_special.priority,
        oc_product_special.price,
        oc_product_special.date_start,
        oc_product_special.date_end');
        $this->db->from('oc_product_special');
        $this->db->join('oc_product','oc_product.product_id=oc_product_special.product_id');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_oc_product_special($product_id, $customer_group_id, $priority,$price,$date_start,$date_end)
    {
        if(!empty($_POST))
        {
            $data=array(
                'product_id'=>$product_id, 
                'customer_group_id'=>$customer_group_id, 
                'priority'=>$priority,
                'price'=>$price,
                'date_start'=>$date_start,
                'date_end'=>$date_end

            );
            $this->db->insert('oc_product_special',$data);
        }

    }
    public function upd_oc_product_special($product_id, $customer_group_id, $priority,$price,$date_start,$date_end)
    {
        $sql='update oc_product_special set product_id=?, customer_group_id=?, priority=?,price=?,date_start=?,date_end=?';
        $this->db->query($sql,array($product_id, $customer_group_id, $priority,$price,$date_start,$date_end));
    }
  public function del_oc_product_special()  
  {
      $this->db->empty_table('oc_product_special');
  }

}
?>