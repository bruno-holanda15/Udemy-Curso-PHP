<?php

 class Carro{

  
  private $modelo;
  private $motor;
  private $ano;

  public function getModelo(){

    return $this->modelo;

  }
  public function setModelo($modelo){

    $this->modelo = $modelo;
    
  }
  public function getMotor(){

    return $this->motor;
    
  }
  public function setMotor($motor){

    $this->motor = $motor;
    
  }
  public function getAno(){

    return $this->ano;
    
  }
  public function setAno($ano){

    $this->ano = $ano;
    
  }

  public function exibir(){
     
     return array(
        "modelo" => $this->getModelo(),
        "motor" => $this->getMotor(),
        "ano" => $this->getAno()
     );
  }

 }


$golf = new Carro();
$golf->setModelo("Golf");
$golf->setMotor("2.0");
$golf->setAno("2013");


echo $golf->getModelo();
echo "<br>";
echo "<pre>";
// estamos dando um print r pq o método retorna um array
print_r($golf->exibir());
echo "</pre>";





?>