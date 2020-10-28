<?php
namespace App\Model;

class Conexao {

    private static $instance;

    public static function getConn(){
        // Verifica se ja existe instancia da conexao com BD, se nao ele cria e envia e se sim somente envia
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=phpoo-mvc;charset=utf8','root','');
        }

        return self::$instance;
    }
}

?>