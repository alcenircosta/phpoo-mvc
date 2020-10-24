<?php
require_once 'vendor/autoload.php';
use Cocur\Slugify\Slugify;

$stringTest = "Parágrafo por parágrafo se escreve um livro.";
$slugify = new Slugify();
$slugify->addRule('a','-');
$convert = $slugify->slugify($stringTest);
echo $convert;
?> 