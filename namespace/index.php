<?php


require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Brunao lindao");
$cad->setEmail("brun@mail.com");
$cad->setSenha("12345");

echo $cad;
echo "<br>";

$cad->registrarVenda();
