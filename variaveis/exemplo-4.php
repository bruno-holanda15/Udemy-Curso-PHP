<?php

// variável super global 
$nome = $_GET["a"];
$sobrenome = $_GET["b"];

var_dump($nome);
echo "<br>";
var_dump($sobrenome);

echo"<br>";

$scr = $_SERVER["SCRIPT_NAME"];
echo $scr."<br>";
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
//endereço do IP 
