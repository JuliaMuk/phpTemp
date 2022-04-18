<?php
$s = $_SERVER['HTTP_REFERER'];
header("Location: $s");
exit();