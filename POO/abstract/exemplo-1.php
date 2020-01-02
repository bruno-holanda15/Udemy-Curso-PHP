<?php


interface  Veiculo{

  public function acelerar($velocidade);
  public function trocarMarcha($velocidade); 
  public function freiar($velocidade);

}
 
abstract class Automovel implements Veiculo{


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



class DeLRey extends Automovel {

    public function empurrar(){

    }
}




$carro = new DelRey();
$carro->acelerar(210);
echo "<br>";
$carro->freiar(190);
echo "<br>";
$carro->trocarMarcha(6);
