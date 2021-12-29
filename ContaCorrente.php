<?php
class ContaCorrente{


    private $titular;


    public $agencia;


    public $numero;


    private  $saldo;


    public function __construct($titular, $agencia, $numero, $saldo){

        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;

    }

    public function sacar($valor)
    {

        $this->saldo = $this->saldo - $valor;
        return $this;

    }

    public function depositar($valor)
    {

        $this->saldo = $this->saldo + $valor;
        return $this;

    }

    Public function getTitular(){
        return $this->titular;
    }

    Public function getSaldo(){
        return $this->saldo;
    }
}