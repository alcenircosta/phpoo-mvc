<?php

class Pessoa {
     public function atribuinome($nome){
         return " O nome da pessoa é ".$nome;
     }
}

class Exibe {
    public $pessoa;
    public $nome;
     
    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    public function exibeNome(){
        echo $this->pessoa->atribuinome($this->nome);
    }
}

$exibe = new Exibe("Alcenir");
$exibe->exibeNome();
?> 