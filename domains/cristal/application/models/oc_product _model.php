<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
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
    public function ins_oc_product($model, $sku,$upc,$ean,$Jan,$isbn,$mpn,$location,$quality,$stock_status_id,$image,$manufacturer_id,$shipping,$price,$points,$tax_class_id,$date_available,$weight,$weight_class_id,$length,$width,$height,$length_class_id,$subtract,$minimum,$sort_order,$status,$viewed,$date_added,$date_modified)
    {
        if(!empty($_POST))
        {
            $data=array(
                'model'=> $model, 
                'sku'=>$sku,
                'upc'=>$upc,
                'ean'=>$ean,
                'Jan'=>$Jan,
                'isbn'=>$isbn,
                'mpn'=>$mpn,
                'location'=>$location,
                'quality'=>$quality,
                'stock_status_id'=>$stock_status_id,
                'image,$manufacturer_id'=>$image,$manufacturer_id,
                'shipping'=>$shipping,
                'price'=> $price,
                'points'=>$points,
                'tax_class_id'=> $tax_class_id,
                'date_available'=> $date_available,
                'weight'=>$weight,
                'weight_class_id'=> $weight_class_id,
                'length'=>$length,
                'width'=>$width,
                'height'=>$height,
                'length_class_id'=> $length_class_id,
                'subtract'=>$subtract,
                'minimum'=>$minimum,
                'sort_order'=>$sort_order,
                'status'=>$status,
                'viewed'=>$viewed,
                '$date_added'=>$date_added,
                'date_modified'=>$date_modified
            );
            $this->db->insert('oc_product',$data);

        }
    }
public function upd_oc_product($model, $sku,$upc,$ean,$Jan,$isbn,$mpn,$location,$quality,$stock_status_id,$image,$manufacturer_id,$shipping,$price,$points,$tax_class_id,$date_available,$weight,$weight_class_id,$length,$width,$height,$length_class_id,$subtract,$minimum,$sort_order,$status,$viewed,$date_added,$date_modified)
{
    $sql = "UPDATE oc_product set model=?, sku=?,upc=?,ean=?,Jan=?,isbn=?,mpn=?,location=?,quality=?,stock_status_id=?,image=?,manufacturer_id=?,$shipping,$price,$points,$tax_class_id,$date_available,weight=?,weight_class_id=?,length=?,width=?,height=?,length_class_id=?,subtract=?,minimum=?,sort_order?,status=?,viewed=?,date_added=?,date_modified=?";
    $this->db->query($sql,array($model, $sku,$upc,$ean,$Jan,$isbn,$mpn,$location,$quality,$stock_status_id,$image,$manufacturer_id,$shipping,$price,$points,$tax_class_id,$date_available,$weight,$weight_class_id,$length,$width,$height,$length_class_id,$subtract,$minimum,$sort_order,$status,$viewed,$date_added,$date_modified));
    

}

public function del_oc_product()
{
    $this->db->empty_table('oc_product');

}






?>