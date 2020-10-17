<?php

class Vechicle {
    public $model;
    public $velocity;
    public $color;

    public function move(){
        echo 'moving<hr/>';
    }
    
    public function stop(){
        echo "stoped";
    }
    public function info(){
        echo $this->model."</br>";
        echo $this->color."</br>";
        echo intval($this->velocity)."</br>";
    }
}

$car = new Vechicle();
$car->model = "Peugeot";
$car->velocity = "60km/h";
$car->color = 'red';
$car->info();
?>