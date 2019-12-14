<?php


//JSON = javascript Object notation, criado pelo DOuglas Crawford , utilizado para integração de sistemas , interoperabilidade de sistemas , antigamente se usava XML, porem o mesmo passava mais parametros e mais pesado

$pessoas = array("UDEMY_CURSO_PHP");

array_push($pessoas, array(
   'nome'=> 'Bruno',
   'idade'=>'24'
      
));
array_push($pessoas, array(
    'nome'=> 'Legoshi',
    'idade'=>'17'
       
 ));

 echo "<pre>";
 var_dump($pessoas);
 echo "</pre>"."<br>";

 echo "<h2>"."Transformando array em objeto usando json_encode"."</h2>"."<pre>";
echo json_encode($pessoas);
echo "</pre>"."<br>";









?>