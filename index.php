<?php
 class Login {
   public static $user;

   public static function checkLogin(){
     echo "O usuário ".self::$user." está logado";
   }
 }
Login::$user = 'Alcenir';
 Login::checkLogin();
?> 