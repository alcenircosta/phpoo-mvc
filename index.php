<?php

class Newsletter {
     public function cadastrarEmail ($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("O E-mail informado é invalido!", 1234);
        else:
            echo "E-mail cadastrado com sucesso!";
        endif;
     }
}

$newsletter = new Newsletter();

try{
$newsletter->cadastrarEmail('alcenir.1994@');
} catch(Exception $e) {
    echo "Mensagem: ".$e->getMessage()."<br>Código: ".$e->getCode()."<br>Linha: ".$e->getLine()."<br>Arquivo: ".$e->getFile();
}
?> 