<?php
namespace App\Model;


class ProdutoDao {

    // Funcao que cria o produto no Banco de dados, recebe como parametro o objeto produto da classe produto
    public function create(Produto $p) {
        $sql = 'INSERT INTO `produtos` (`id`,`nome`,`descricao`) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getId());
        $stmt->bindValue(2, $p->getNome());
        $stmt->bindValue(3, $p->getDescricao());
        $stmt->execute();
        }
        // Funcao de leitura dos produtos exixtentes no db
    public function read() {
        $sql = 'SELECT * FROM `produtos`';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            // caso o resultado nao possua nenhum item, e retornado um array para que nao seja exibida uma mensagem de erro na tela
            return array();
        }
    }
    // Funcao que atualiza o produto, recebe novamente um objeto produto e usa como referencia o ID para atualizar o item
    public function update(Produto $p) {
        $sql = 'UPDATE `produtos` SET `nome` = ?, `descricao` = ? WHERE `id` = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getNome());
        $stmt->bindValue(2, $p->getDescricao());
        $stmt->bindValue(3, $p->getId());
        $stmt->execute();
    }
    // Funcao que deleta o produto, recebe um id como parametro e exclui o item baseado nesse id
    public function delete($id){
        $sql = 'DELETE FROM `produtos` WHERE `id` = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();        
    }

}

?>
