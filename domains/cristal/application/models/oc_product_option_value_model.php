<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_option_value_model extends CI_Model {
    public function get_oc_product_option_value_model()
    {
        $this->db->select('oc_product_option_value.product_option_id,
        oc_product_option_value.product_id,
        oc_product_option_value.option_id,
        oc_product_option_value.option_value_id,
        oc_product_option_value.quantity,
        oc_product_option_value.subtract,
        oc_product_option_value.price,
        oc_product_option_value.price_prefix,
        oc_product_option_value.points, 
        oc_product_option_value.points_prefix,
        oc_product_option_value.weight,
        oc_product_option_value.weight_prefix');
        $this->db->from('oc_product_option_value');
        $this->db->join('oc_product','oc_product.product_id=oc_product_option_value.product_id');
        $this->db->join('oc_product_option','oc_product_option_value.option_id=oc_product_option.option_id');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_oc_product_option_value($product_option_id,$product_id,$option_id,$option_value_id,$quantity,$subtract,$price,$price_prefix,$points, $points_prefix,$weight,$weight_prefix)
    {
        if(!empty($_POST))
        {
            $data=array(

                'product_option_id'=>$product_option_id,
                'product_id'=>$product_id,
                'option_id'=>$option_id,
                'option_value_id'=>$option_value_id,
                'quantity'=>$quantity,
                'subtract'=>$subtract,
                'price'=>$price,
                'price_prefix'=>$price_prefix,
                'points'=>$points, 
                'points_prefix'=>$points_prefix,
                'weight'=>$weight,
                'weight_prefix'=>$weight_prefix
            );
            $this->db->insert('oc_product_option_value',$data);
        
        }

    

    }

    public function upd_oc_product_option_value($product_option_id,$product_id,$option_id,$option_value_id,$quantity,$subtract,$price,$price_prefix,$points, $points_prefix,$weight,$weight_prefix)
    {
        $sql= 'update oc_product_option_value set product_option_id=?,product_id=?,option_id=?,option_value_id=?,quantity=?,subtract=?,price=?,price_prefix=?,points=?, points_prefix=?,weight=?,weight_prefix=?';
        $this->db->query($sql,array($product_option_id,$product_id,$option_id,$option_value_id,$quantity,$subtract,$price,$price_prefix,$points, $points_prefix,$weight,$weight_prefix));
    }

public function del_oc_product_option_value()
{
    $this->db->empty_table('oc_product_option_value');
}
}
?>