<?php 
require "Conta.php";
require "Cliente.php";

$cliente = new Cliente( "123445", 100.00, "Rafael", 17, "Rua PHP");

echo $cliente->getEndereco().PHP_EOL;
echo $cliente->getIdade().PHP_EOL;
echo $cliente->retornarNumero();
