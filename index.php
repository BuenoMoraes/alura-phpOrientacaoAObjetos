<?php

ini_set('display_errors',1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
require "ContaCorrente.php";


$contaCorrenteJoao = new ContaCorrente("Joao","5199","163212", 2.000);
$contaCorrenteMaria = new ContaCorrente("Joao","5199","163212", 2.000);


/*var_dump($contaCorrenteJoao);

$contaCorrenteJoao->sacar(50.00);
var_dump($contaCorrenteJoao);

$contaCorrenteJoao->depositar(50.00);
var_dump($contaCorrenteJoao);*/