<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_image extends CI_Model
{
    public function get_oc_product_image()
    {
        $this->db->select('oc_product_image.oc_product_image_id,oc_product_image.product_id,oc_product_image.image,oc_product_image.sort_order');
        $this->db->from('oc_product_image');
        $this->db->get('oc_product_image');

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