
<?php
//функция создания шаблона
function renderTemplate($view, $data) {
    extract($data);
    ob_start();
    require $view;
    $output = ob_get_clean();
    return $output;
}