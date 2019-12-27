<?php


class Pessoa{

    // criando um atribut0
    public $nome;

    //criando um método
    public function falar(){

        return "O meu nome é ".$this->nome;
    }


}

$bruno = new Pessoa();
$bruno->nome = "Bruno Holanda";
echo $bruno->falar();



?>