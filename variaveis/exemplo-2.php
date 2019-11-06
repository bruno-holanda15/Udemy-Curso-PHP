<?php


// variavies pré-definidas ou super globais e variáveis de ambiente


$nome = (int)$_GET["a"];

// var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
echo $ip."<br>";
// pega informações do ambiente
$ipOutro = $_SERVER["SCRIPT_NAME"];
echo $ipOutro;
//MOSTRA  o caminho do acesso das pastas
?>