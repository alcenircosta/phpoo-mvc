<?php

class Pessoa {
    private $nome;
    private $idade;
    public function __set($nome,$valor){
        $this->nome = $valor;
    }
    public function __get($nome){
        return $this->nome;
    }


}
$pessoa = new Pessoa();
$pessoa->nome="Alcenir";
var_dump($pessoa);

echo $pessoa->nome;

?> 