<?php
require '_classes/Produto.php'; 
require '_models/Produto.php'; 
use _models\Produto as ProductModels; 
use _classes\Produto as ProductClasses; 

$produto = new ProductModels();
$produto->mostrarDetalhes();
 ?> 