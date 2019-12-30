<?php

 class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){
        
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }
    public function __destruct(){

        var_dump("Você destrui o objeto");

    }
    public function __toString(){

       return $this->logradouro.", ".$this->numero." - ".$this->cidade;

    }

 }

 $meuEndereco = new Endereco("Rua Flores","25","São Paulo");
 var_dump($meuEndereco);
 echo "<br>";

 //chama o objeto como string porque tem o método toString
 echo $meuEndereco;
 echo "<br>";

 //chamou a função destruct 
 unset($meuEndereco);
 echo "<br>";