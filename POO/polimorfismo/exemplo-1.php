<?php


abstract class Animal{

    public function falar(){
        return "Som";
    }
    
    public function mover(){
        return "Andar";
    }

}

class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }

}


class Gato extends Animal{

    public function falar(){
        return "Mia";
    }

    public function mover(){
        return "Pula e ". parent::mover();
    }

}


class Passaro extends Animal{
    
   public function falar($tipo = "teste"){
      
     if($tipo === "papagaio"){
         return  "Pia e fala";
     }else {
         return parent::falar();
     }

   }

    public function mover(){
        return "Voa e ". parent::mover();
    }

}

$pluto = new Cachorro();
echo $pluto->falar();
echo "<br>";
echo $pluto->mover();
echo "<br>-----------------^^^^^^^^^------<br>";


$cat = new Gato();
echo $cat->falar();
echo "<br>";
echo $cat->mover();
echo "<br>-----------------^^^^^^^^^------<br>";

$pid = new Passaro();
echo $pid->falar("papagaio");
echo "<br>";
echo $pid->mover();
