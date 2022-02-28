<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class oc_product_theirsystem_properties_model extends CI_Model {
    public function get_oc_product_theirsystem_properties()
    {
        $this->db->select('oc_product_theirsystem_properties.product_id, 
        oc_product_theirsystem_properties.language_id, 
        oc_product_theirsystem_properties.properties');
        $this->db->from('oc_product_theirsystem_properties');
        $this->db->join('oc_product','oc_product.product_id=oc_product_theirsystem_properties.product_id');
        $sql=$this->db->get();
        return $sql->result_array();
    }
    public function ins_oc_product_theirsystem_properties($language_id, $properties)
    {
        if(!empty($_POST))
        {
            $data=array(

                'language_id'=>$language_id, 
                'properties'=>$properties
            );
            $this->db->insert('oc_product_theirsystem_properties',$data);
        }
    }
    public function upd_oc_product_theirsystem_properties($language_id, $properties)
    {
        $sql='update oc_product_theirsystem_properties set properties set language_id=?, properties=?';
        $this->db->query($sql,array($language_id, $properties));
    }
    public function del_oc_product_theirsystem_properties()
    {
        $this->db->empty_table('oc_product_theirsystem_properties');
    }

}
?>