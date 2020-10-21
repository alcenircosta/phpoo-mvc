<?php
 class Pessoa {
   const nome = "Alcenir ";

   public function showName(){
     echo self::nome;
   }
 }

class Alcenir extends Pessoa {
  const nome = "Costa";

  public function showName(){
    echo parent::nome;
    echo self::nome;
  }
}

$alcenir = new Alcenir();
$alcenir->showName();
?> 