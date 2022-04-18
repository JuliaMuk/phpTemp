<?php

require_once "config.php";

$count = $_POST['count']; 
$id_product = $_POST['id']; 

$conn = mysqli_connect($host,$user, $pass, $db);
if(!$conn) {
    print("Ошибка соединения");
}
else {
    mysqli_query($conn, "SET NAMES 'UTF8'");
    $result = mysqli_query($conn,"SELECT id_order FROM orders WHERE id_buyer = 1 AND o_status='в обработке'");
    if(!$result){
        $result = mysqli_query($conn, "INSERT INTO orders(id_buyer) VALUES(1)");
        $id_order = mysqli_insert_id($conn);
    }
    else {
        $id_order = mysqli_fetch_array($result)['id_order'];
    }

    
    $result = mysqli_query($conn, "INSERT INTO order_line(id_order, id_product, count) VALUES($id_order, $id_product ,$count )");
    
    mysqli_close($conn);
}


$s = $_SERVER['HTTP_REFERER'];
header("Location: $s");
exit();