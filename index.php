<?php

class Produtos {
    public $nome;
    public $valor;

    function __construct($nome,$valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona( Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe() {
        foreach($this->produtos as $produto){
            echo $produto->nome."<br>";
            echo $produto->valor."<br>";
        }
    }
}

$sabonete = new Produtos("Sabonete", "2,50");
$condicionador = new Produtos("Condicionador", "12,50");
$shampoo = new Produtos("Shampoo", "8,50");


$carrinho = new Carrinho();
$carrinho->adiciona($sabonete);
$carrinho->adiciona($condicionador);
$carrinho->adiciona($shampoo);

$carrinho->exibe();
?> 