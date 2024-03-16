<?php
function insert_brand($name_brand){
    $sql="INSERT INTO brand(name_brand) VALUES('$name_brand')";
    pdo_execute($sql);
}

function delete_brand($id_brand){
    $sql="DELETE FROM brand WHERE id_brand=".$id_brand;
    pdo_execute($sql);
}
 function loadall_brand(){
    $sql="SELECT * FROM brand ORDER BY id_brand DESC";
    $listbrand=pdo_query($sql);
    return $listbrand;
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