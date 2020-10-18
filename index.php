<?php

class Login {

    private $email;
    private $password;
    private $name;

    public function __construct($email,$password,$name){
      $this->setName($name);
      $this->setEmail($email);
      $this->setPassword($password);
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $cleanEmail;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getName(){
      return $this->name;
  }
  public function setName($name){
      $this->name = $name;
  }

    public function verify(){
      if($this->email == "teste@teste.com" && $this->password == "1234"):
        echo"access granted";
      else:
        echo "access denied";
      endif;
    }
}

$logar = new Login("teste@teste.com","1234","Alcenir");
$logar->verify();
echo "<br/>";
echo $logar->getEmail();
echo "<hr>";
var_dump($logar);

?>