<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_description_model extends CI_Model {
    public function get_oc_product_description()
    {
        $this->db->select('model,
        oc_product_description.language_id, 
        oc_product_description.name,
        oc_product_description.description,
        oc_product_description.tag, 
        oc_product_description.meta_title,
        oc_product_description.meta_description, 
        oc_product_description.meta_keyword');
        $this->db->from('oc_product_description' );
        $this->db->join('oc_product', 'oc_product.product_id = oc_product_description.product_id');
        $sql=$this->db->get();
        return $sql->result_array();



    }
    public function ins_oc_product_description($language_id,$tag,$meta_title,$meta_description, $meta_keyword)
    {
    if (!empty($_POST))
    {
        $data=array(
            'language_id'=>$language_id,
            'tag,$meta_title'=>$tag,$meta_title,
            'meta_description'=>$meta_description, 
            'meta_keyword'=>$meta_keyword

        );
        $this->db->insert('oc_product_description',$data);
    }

    }
    public function upd_oc_product_description($language_id,$tag,$meta_title,$metameta_description, $meta_keyword)
    {
        $sql='update oc_product_description set language_id=?,tag=?,$meta_title=?,$metameta_description=?, meta_keyword=?';
        $this->db->query($sql,array($language_id,$tag,$meta_title,$metameta_description, $meta_keyword));

    }
    public function del_oc_product_description()
    {
        $this->db->empty_table('oc_product_description');
    }
    public function oc_product_description_model_get_xml()
    {
        $this->db->select('model,
        oc_product_description.language_id, 
        oc_product_description.name,
        oc_product_description.description,
        oc_product_description.tag, 
        oc_product_description.meta_title,
        oc_product_description.meta_description, 
        oc_product_description.meta_keyword');
        $this->db->from('oc_product_description' );
        $this->db->join('oc_product', 'oc_product.product_id = oc_product_description.product_id');
        $sql=$this->db->get();
        return $sql;
      
    }

}
?>