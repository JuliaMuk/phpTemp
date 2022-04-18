<?php
require_once "renderTemplate.php";

require_once("data.php");

$id = $_GET["id"];
//создание шаблона главной страницы - каталога
$page_product = renderTemplate('templates/product.php', ['item' => $items_list[$id - 1], ]);

//вызов функции создания шаблона
$layout_content = renderTemplate('templates/layout.php',
['content' => $page_product ,
'title' => 'Интернет-магазин:'. $items_list[$id - 1]['name'],
'name' => 'Мухина Юлия Рамилевна',
'year' => 2022]);

//вывод страницы на экран
print($layout_content);
