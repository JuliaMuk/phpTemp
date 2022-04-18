<?php
// //данные каталога
// $items_list = [
//     ['id' => 1, 'name' => 'товар 1', 'price' => 3000, 'path' => 'img/1.jpg'],
//     ['id' => 2, 'name' => 'товар 2', 'price' => 5000, 'path' => 'img/2.jpg'],
//     ['id' => 3, 'name' => 'товар 3', 'price' => 2300, 'path' => 'img/3.jpg'],
//     ['id' => 4, 'name' => 'товар 4', 'price' => 12300, 'path' => 'img/4.jpg'],
//     ['id' => 5, 'name' => 'товар 5', 'price' => 30000, 'path' => 'img/5.jpg']
// ];
 //категории
 //$categories = ["диваны", "столы", "камоды", "кровати", "шкафы"];

require_once "config.php";
$conn = mysqli_connect($host,$user, $pass, $db);
if(!$conn) {
    print("Ошибка соединения");
}
else {
    mysqli_query($conn, "SET NAMES 'UTF8'");
    $items_list = mysqli_query($conn, "SELECT * FROM products");
    if (!$items_list){
        print("Произошла ошибка при выплнении запроса");
    }
    $categories = mysqli_query($conn, "SELECT * FROM categories");
    if (!$categories){
        print("Произошла ошибка при выплнении запроса");
    }
    mysqli_close($conn);
}

