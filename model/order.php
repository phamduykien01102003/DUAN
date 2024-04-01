<?php
function show_order()
{
    $sql = "SELECT * FROM `order` O 
    INNER JOIN customer CU ON CU.id_customer = O.id_customer
    ";
    return pdo_query($sql);
}


function show_one_order($id_order)
{
    $sql = "SELECT * FROM `order` O 
    INNER JOIN customer CU ON CU.id_customer = O.id_customer
    WHERE O.id_order = '$id_order'
    ";
    return pdo_query_one($sql);
}

function update_status_order($id_order, $status_order)
{
    $sql = "UPDATE `order`
    SET
    `status_order`='$status_order'
    WHERE  `id_order`='$id_order'";
    pdo_execute($sql);
}
