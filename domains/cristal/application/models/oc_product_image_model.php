<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_image_model extends CI_Model
{
    public function get_oc_product_image()
    {
        $this->db->select('oc_product_image.product_image_id,
        model,
        oc_product_image.image,
        oc_product_image.sort_order');
        $this->db->from('oc_product_image');
        $this->db->join('oc_product', 'oc_product_image.product_id= oc_product.product_id');
        $sql=$this->db->get();
        return $sql->result_array();

    }
    public function ins_oc_product_image($product_id,$image, $sort_order)
    {
        if(!empty($_POST))
        {
            $data=array(
                'product_id'=>$product_id,
                'image'=>$image, 
                'sort_order'=>$sort_order

            );
            $this->db->insert('oc_product_image',$data);
        }
    }
    public function upd_oc_product_image($product_id,$image, $sort_order)
    {
        $sql="update oc_product_image set product_id=?,image=?, sort_order=?";
        $this->query($sql,array($product_id,$image, $sort_order));

    }
    public function del_oc_product_image()
    {
        $this->db->empty_table('oc_product_image');
    }
}
?>