<?php

class Login {

    private $email;
    private $password;

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

    public function verify(){
      if($this->email == "teste@teste.com" && $this->password == "1234"):
        echo"access granted";
      else:
        echo "access denied";
      endif;
    }
}

$logar = new Login();
$logar->setEmail("ateste()/@teste.com");
$logar->setPassword("1234");
$logar->verify();
echo "<br/>";
echo $logar->getEmail();

?>