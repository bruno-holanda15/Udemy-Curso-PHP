<?php

 $condicao = true;

 while ($condicao) {

     $numero = rand(1 , 19);

     if($numero === 3){

         echo "Este número é o 3";
         $condicao = false;

     }
      echo $numero. "<br>";

 }