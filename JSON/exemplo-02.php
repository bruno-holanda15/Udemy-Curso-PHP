<?php


$json = '["UDEMY_CURSO_PHP",{"nome":"Bruno","idade":"24"},{"nome":"Legoshi","idade":"17"}]';

$array = json_decode($json,true);

print_r($array);


?>

