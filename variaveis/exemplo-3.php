<?php


$nome = "bruno";

function teste() {

    global $nome;
    echo $nome;
}


function teste2() {
  
  $nome = "Marcelo";
  echo $nome." é o nome teste 2"."<br>";
  echo "Função teste2";
}

teste();
echo "<br>";
teste2();


?>