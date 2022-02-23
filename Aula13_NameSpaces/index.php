<?php
require 'Classes/produto.php';
require 'Models/produto.php';

use \classes\Produto as produtctsModel;
use \classes\Produto as productsClass;

$produto = new produtctsModel();
$produto->mostrarDetalhes();

echo "<hr>";

$produto2 = new productsClass();
$produto2->mostrarDetalhes();
