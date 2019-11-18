<?php


// include "inc/exemplo-1.php";
require_once "inc/exemplo-1.php";
require_once "inc/exemplo-1.php";

// mesmo chamando o arquivo duas vezes, com o require_once, não da erro por chamar apenas uma vez o arquivo

$resultado = soma(12,11,0);

echo $resultado;

