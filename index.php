<?php
// Moto e Carro são extensoes de Veiculo, por isso, herdão os mesmos parametros e funcoes da classe Mãe (Veículo)
abstract class Bank {
  protected $balance;
  protected $balance_limit;
  protected $interest;

  public function setSaldo($saldo){
    $this->saldo = $saldo;
  }
  public function getSaldo(){
    return $this->saldo;
  }
  abstract protected function Sacar($valor);
  abstract protected function Depositar($valor);

}

class Itau extends Bank{
  public function Sacar($valor){
    $this->saldo -= $valor;
    echo "Sacou: ".$valor;
  }
  public function Depositar($valor){
    $this->saldo += $valor;
    echo "Depositou: ".$valor;
  }
}

$itau = new Itau();
$itau->setSaldo(5000);
echo "Saldo: -> ";
echo $itau->getSaldo();
echo "<hr>";
$itau->sacar(1000);
echo "Saldo: -> ";
echo $itau->getSaldo();
echo "<hr>";

echo "<br/>";
$itau->Depositar(2000);
echo "Saldo: -> ";
echo $itau->getSaldo();
echo "<hr>";

?> 