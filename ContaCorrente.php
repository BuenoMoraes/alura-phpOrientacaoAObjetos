<?php
require "Validacao.php";
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

    public function __get($atributo){
        Validacao::protegeAtributo($atributo);
        return $this->$atributo;
    }

    public function __set($atributo, $valor){

        Validacao::protegeAtributo($atributo);

         $this->sacar($valor);
    }

    public function transferir($valor, ContaCorrente $contaCorrente){

        Validacao::verificaNumerico($valor);

         $this->sacar($valor);

         $contaCorrente->depositar($valor);

         return $this;
    }

    Public function getTitular(){
        return $this->titular;
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



  
/*
  
    Public function getSaldo(){
        return $this->saldo;
    }
*/

}