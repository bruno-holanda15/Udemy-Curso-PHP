<?php

 class Pessoa{
    
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";

    }

 }

 $encap = new Pessoa();
 $encap->verDados();

 echo $encap->nome;
 echo "<br>";
 // consegue ver com métodos, e as classes filhas tem acesso , pois a mesma é protected e não private
 echo $encap->idade;
 echo "<br>";
 // o atributo privado nem mesmo as classes herdeiras conseguem acessar o método ,só a propria classe
 echo $encap->senha;

