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

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        if ($atributo == "tiular" || $atributo == "saldo") {
            throw new Exception("O atributo $atributo continua privado");
        }
         $this->$atributo =  $valor;
    }
/*
    Public function getTitular(){
        return $this->titular;
    }

    Public function getSaldo(){
        return $this->saldo;
    }
*/

}