<?php
function insert_catergory($name_catergory){
    $sql="INSERT INTO catergory(name_catergory) VALUES('$name_catergory')";
    pdo_execute($sql);
}

function delete_catergory($id_catergory){
    $sql="DELETE FROM catergory WHERE id_catergory=".$id_catergory;
    pdo_execute($sql);
}
 function loadall_catergory(){
    $sql="SELECT * FROM catergory ORDER BY id_catergory DESC";
    $listcatergory=pdo_query($sql);
    return $listcatergory;
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