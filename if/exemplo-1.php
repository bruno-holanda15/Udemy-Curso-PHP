<?php

$qualASuaIdade = 99;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 66;


 if ($qualASuaIdade < $idadeCrianca ) {
    
     echo "Você é uma criança";
 } elseif ($qualASuaIdade < $idadeMaior) {
    
    echo "Você é um young adult";

 }  elseif( $qualASuaIdade < $idadeMelhor)
 {
     echo "Você é um adulto depressivo,ahahhaah";
 }else {

    echo "Você é um velhinho topppen";
 }
echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";





 ?>