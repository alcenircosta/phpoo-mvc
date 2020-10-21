<?php
 class Animal {
   public function andar(){
     echo "O animal andou <br/>";
   }
   public function correr(){
     echo "O animal Correu";
   }
 }
 class Cavalo extends Animal{
  public function andar(){
    echo "O cavalo andou <br/>";
  }
  public function andarRapido(){
    $this->correr();
  }
 }
 $animal = new Cavalo();
 $animal->andar();
 $animal->andarRapido();
 
 ?> 