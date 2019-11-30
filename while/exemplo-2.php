<?php

$total =120;
$desconto = 0.9;

do {
    $total *= $desconto;
    echo " valor após o desconto é :".$total."<br>";

}  while ($total > 90);

echo $total;
