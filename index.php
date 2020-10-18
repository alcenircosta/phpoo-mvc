<?php
// Moto e Carro são extensoes de Veiculo, por isso, herdão os mesmos parametros e funcoes da classe Mãe (Veículo)
class Vechicle{
  private $model;
  public $color;
  public $year;
  public $vechicle;


  public function setModel($model){
    $this->model = $model;
  }
  public function getModel(){
    return $this->model;
  }
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
  public function setModel($model){
    $this->model = $model;
  }
  public function getModel(){
    return $this->model;
  }
}

class Motorcicle extends Vechicle{
  public function info(){
    echo 'Moto--> Modelo: '.$this->model.'; <br/> Ano:'.$this->year.';<br/> Cor:'.$this->color; 
   }
}

$truck = new Vechicle();
$truck->setModel("Volkswagem");
echo $truck->getModel();
var_dump($truck);
?> 