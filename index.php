<?php
 require_once 'vendor/autoload.php';

 /*
 *Criação do objeto e atributos da classe Produto
 */
 $produto = new \App\Model\Produto();
 $produto->setNome("Smartphone");
 $produto->setDescricao("Produto de ótima qualidade");
 $produto->setId(hexdec(uniqid()));

/*
*Criação do ProdutoDao que gerencia o produto (cria,deleta,atualiza e lê)
*/
 $produtoDao = new \App\Model\ProdutoDao();

$produtoDao->delete(1681655025322683);
// $produtoDao->create($produto);
// $produtoDao->update($produto);Aqui precisa usar o id do produto que deseja alterar

// Funcao que exibe os produtos cadastrados
 foreach($produtoDao->read() as $produto){
    echo $produto['id'].'<br>';
    echo $produto['nome'].'<br>';
    echo $produto['descricao'].'<br><hr>';
}

?> 