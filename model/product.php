<?php
function insert_product($name_product,$id_brand,$id_color,$id_sport,$id_size,$id_catergory,$img_product,$sale,$stock,$quanity,$date_product,$view,$description){
    $sql="INSERT INTO product(name_product,id_brand,id_color,id_sport,id_size,id_catergory,img_product,sale,stock,quanity,date_product,view,description) 
    VALUES('$name_product','$id_brand','$id_color','$id_sport','$id_size','$id_catergory','$img_product','$sale','$stock','$quanity','$date_product','$view','$description')";
    pdo_execute($sql);
}

function delete_product($id_product){
    $sql="DELETE FROM product WHERE id_product=".$id_product;
    pdo_execute($sql);
}


//  function loadall_product($kyw,$id_brand){
//     $sql="SELECT * FROM product where 1";
//     if($kyw!=""){
//          $sql.=" and name_product like '%".$kyw."%'";
//     }
//     if($id_brand>0){
//        $sql.=" and id_brand ='".$id_brand."'";
//     }
//     $sql.=" ORDER BY id_product DESC";
//     $listproduct=pdo_query($sql);
//     return $listproduct;
//     // $sql="SELECT tt.*,dm.ten_danh_muc FROM khoahoc tt JOIN danhmuckhoahoc dm ON tt.id_danh_muc = dm.id_danh_muc  ORDER BY id DESC";
//  }

 function loadall_product($kyw,$id_brand){
    $sql="SELECT  tt.*,brand.name_brand FROM product tt 
    JOIN brand brand ON tt.id_brand = brand.id_brand where 1";
    
    if($kyw!=""){
         $sql.=" and name_product like '%".$kyw."%'";
    }
    if($id_brand>0){
       $sql.=" and id_brand ='".$id_brand."'";
    }
    $sql.="  ORDER BY id_product DESC";
    $listproduct=pdo_query($sql);
    return $listproduct;
    // $sql="SELECT tt.*,dm.ten_danh_muc FROM khoahoc tt JOIN danhmuckhoahoc dm ON tt.id_danh_muc = dm.id_danh_muc  ORDER BY id DESC";
 }





//  function app_danhmuc($id){
//     $sql="SELECT * FROM danhmuc WHERE id=".$id;
//     $danhmuc=pdo_query_one($sql);
//     return $danhmuc;
//  }
//  function update_danhmuc($tenloai,$id){
//     $sql="UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
//     pdo_execute($sql);
//  }
?>