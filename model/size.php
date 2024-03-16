<?php
function insert_size($name_size){
    $sql="INSERT INTO size(name_size) VALUES('$name_size')";
    pdo_execute($sql);
}

function delete_size($id_size){
    $sql="DELETE FROM size WHERE id_size=".$id_size;
    pdo_execute($sql);
}
 function loadall_size(){
    $sql="SELECT * FROM size ORDER BY id_size DESC";
    $listsize=pdo_query($sql);
    return $listsize;
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