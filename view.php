<?php
require_once "renderTemplate.php";



$id = $_GET["id"];

require_once "config.php";
$conn = mysqli_connect($host,$user, $pass, $db);
if(!$conn) {
    print("Ошибка соединения");
}
else {
    mysqli_query($conn, "SET NAMES 'UTF8'");
    $item = mysqli_query($conn, "SELECT * FROM products WHERE id_product= $id ");
    
    if (!$item){
        print("Произошла ошибка при выплнении запроса");
    } else {
        $item = mysqli_fetch_array($item);
    }
    
    
}

//создание шаблона главной страницы - каталога
$page_product = renderTemplate('templates/product.php', ['item' => $item ]);

//вызов функции создания шаблона
$layout_content = renderTemplate('templates/layout.php',
['content' => $page_product ,
'title' => 'Интернет-магазин:'. $item['p_name'],
'name' => 'Мухина Юлия Рамилевна',
'year' => 2022]);

//вывод страницы на экран
print($layout_content);
mysqli_close($conn);