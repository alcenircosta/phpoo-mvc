<?php
// Moto e Carro são extensoes de Veiculo, por isso, herdão os mesmos parametros e funcoes da classe Mãe (Veículo)
class Vechicle{
  public $model;
  public $color;
  public $year;
  public $vechicle;

  public function move(){
    echo $this->vechicle." is moving <br/>";
  }

  public function stop(){
    echo $this->vechicle." stoped <br/>";
  }

}

class Car extends Vechicle{
  public function info(){
   echo 'Carro--> Modelo: '.$this->model.'; <br/> Ano:'.$this->year.';<br/> Cor:'.$this->color; 
  }
}

class Motorcicle extends Vechicle{
  public function info(){
    echo 'Moto--> Modelo: '.$this->model.'; <br/> Ano:'.$this->year.';<br/> Cor:'.$this->color; 
   }
}
$carrinho = new Car();
$carrinho->color = "Blue";
$carrinho->year = 2018;
$carrinho->model = 'Fiat';
$carrinho->vechicle = 'Carro';
$carrinho->move();
$carrinho->stop();


$motocicleta = new Motorcicle();
$motocicleta->model = 'Kawasaki';
$motocicleta->color = "green";
$motocicleta->year = 2020;
$motocicleta->vechicle= 'Moto';
$motocicleta->move();
$motocicleta->stop();

print_r($carrinho);
print_r($motocicleta);
?>