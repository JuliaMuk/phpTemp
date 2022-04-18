<?php
require_once "renderTemplate.php";

require_once("data.php");




//создание шаблона главной страницы - каталога
$page_main = renderTemplate('templates/main.php', ['items' => $items_list, 'categories' => $categories]);

//вызов функции создания шаблона
$layout_content = renderTemplate('templates/layout.php',
['content' => $page_main,
'title' => 'Интернет-магазин: каталог',
'name' => 'Мухина Юлия Рамилевна',
'year' => 2022]);

//вывод страницы на экран
print($layout_content);
