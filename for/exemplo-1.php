<?php

//criar primeiro um contador, depois condição do for, e por último o incremento
for ($i = 2 ; $i < 1000 ; $i+=9) {
    if ($i > 200 && $i < 800) {
        continue;
        // se o i for maior que 200 e menor que 800, continue
    }
        // se o i for maior ou igual a 900 , pare a execução
    if ($i >= 900) {
        break;
    }
    echo $i. "<br>";
}
