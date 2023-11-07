<?php 
require "Conta.php";
require "Cliente.php";

$conta = new Conta ("3478", "Rafel", 24.89);
$cliente = new Cliente (17, "RUA MARCO POLO", $conta);

var_dump($cliente->getConta()->retornarNumero());
