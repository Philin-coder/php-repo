<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_to_category_model extends CI_Model{
    public function get_oc_product_to_category()
    {
        $this->db->select('model,oc_product_to_category.category_id');
        $this->db->from('oc_product_to_category');
        $this->db->join('oc_product','oc_product.product_id=oc_product_to_category.product_id');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_oc_product_to_category($category_id)
    {
        if (!empty($_POST))
        {
        $data =array(
            'category_id'=>$category_id


        );
        $this->insert('oc_product_to_category',$data);

    }
}
public function upd_oc_product_to_category($category_id)
{
    $sql='update oc_product_to_category set product_id=?';
    $this->db->query($sql,array($category_id));
}

public function del_oc_product_to_category()
{
    $this->db->empty_table('oc_product_to_category');
}
}
?>