<?php
 require_once 'vendor/autoload.php';

 $produto = new \App\Model\Produto();

 $produto->setNome("Smartphone");
 $produto->setDescricao("Produto de ótima qualidade");
 $produto->setId(hexdec(uniqid()));

 $produtoDao = new \App\Model\ProdutoDao();

$produtoDao->delete(1681655025322683);

 foreach($produtoDao->read() as $produto){
    echo $produto['id'].'<br>';
    echo $produto['nome'].'<br>';
    echo $produto['descricao'].'<br><hr>';
}

//Trecho para teste do DB;
// $instance = new \PDO('mysql:host=localhost;dbname=phpoo-mvc;charset=utf8','root','');
// $id = hexdec(uniqid());
//  $sql = 'INSERT INTO `produtos` (`id`,`nome`,`descricao`) VALUES (?,?,?)';
//         $stmt = $instance->prepare($sql);
//         $stmt->bindValue(1, $id);
//         $stmt->bindValue(2, "Tteee");
//         $stmt->bindValue(3, "TESE");
//         if($stmt->execute()){
//             echo 'Funcionou';
//         }


?> 