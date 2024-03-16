<?php
function insert_sport($name_sport){
    $sql="INSERT INTO sport(name_sport) VALUES('$name_sport')";
    pdo_execute($sql);
}

function delete_sport($id_sport){
    $sql="DELETE FROM sport WHERE id_sport=".$id_sport;
    pdo_execute($sql);
}
 function loadall_sport(){
    $sql="SELECT * FROM sport ORDER BY id_sport DESC";
    $listsport=pdo_query($sql);
    return $listsport;
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