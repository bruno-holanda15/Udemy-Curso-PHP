<?php


interface  Veiculo{

  public function acelerar($velocidade);
  public function trocarMarcha($velocidade); 
  public function freiar($velocidade);

}

class Civic implements Veiculo{


    public function acelerar($acela){
        echo " O veiculo acelera até :". $acela . " km/h";
    }

    public function freiar($freia){
        echo " O veiculo freia até :". $freia . " km/h";
    }

    public function trocarMarcha($x){
        echo " O veiculo possui :". $x ;
    }
}

$carro = new Civic();
$carro->acelerar(210);
echo "<br>";
$carro->freiar(190);
echo "<br>";
$carro->trocarMarcha(6);
