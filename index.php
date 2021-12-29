<?php

ini_set('display_errors',1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');


require "Validacao.php";
require "ContaCorrente.php";


$contaCorrenteJoao = new ContaCorrente("Joao","5199","163212", 2.000);
$contaCorrenteJose = new ContaCorrente("Jose","5199","163212", 2.000);


var_dump($contaCorrenteJoao);

$contaCorrenteJoao->saldo = 0;

var_dump($contaCorrenteJoao);

$contaCorrenteJoao = new ContaCorrente("5199","122221-2");
$contaCorrenteJoao->titular = "João";
$contaCorrenteJoao->saldo = 500.00;

$contaCorrenteJose = new ContaCorrente("5199","4343343-2");
$contaCorrenteJose->titular = "José";
$contaCorrenteJose->saldo = 1500.00;

/*$contaCorrenteJoao->sacar(50.00);
var_dump($contaCorrenteJoao);

$contaCorrenteJoao->depositar(50.00);
var_dump($contaCorrenteJoao);*/