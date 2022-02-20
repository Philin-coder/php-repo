<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class oc_product_model extends CI_Model
{
public function get_oc_product()

    {
    $this->db->select('oc_product.product_id, oc_product.sku, oc_product.upc, oc_product.ean,oc_product.ean, oc_product.jan,oc_product.jan,
    oc_product.isbn, oc_product.mpn, oc_product.location,oc_product.quality, oc_product.stock_status_id, oc_product.image,oc_product.manufacturer_id, 
    oc_product.shipping,oc_product.price,oc_product.points, oc_product.tax_class_id, oc_product.tax_class_id, oc_product.date_available,oc_product.weight,
    oc_product.weight_class_id,oc_product.weight_class_id, oc_product.length, oc_product.width,oc_product.height, oc_product.length_class_id, oc_product.subtract
    oc_product.minimum,oc_product.sort_order, oc_product.status, oc_product.viewed,oc_product.date_added, oc_product.date_modified');
    $this->db->from('oc_product');
    $this->db->get('oc_product');
    }
public function ins_ocproduct
{
    
}


}
?>