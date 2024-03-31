<?php
function show_order()
{
    $sql = "SELECT * FROM `order` O 
    INNER JOIN customer CU ON CU.id_customer = O.id_customer
    ";
    return pdo_query($sql);
}
