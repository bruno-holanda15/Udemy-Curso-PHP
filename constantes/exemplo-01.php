<?php


define('HERO','Homem-aranha');

echo HERO;

echo "<br>";

// podemos armazenar um array em uma constante e chama-lo de forma diferente , utilizando o true como terceiro parametro
define("ANIME",[
    'legoshi',
    'louis',
    'haru'
],true);

print_r(anime);

echo "<br>";
// versão de PHP utilizada
echo PHP_VERSION;




?>