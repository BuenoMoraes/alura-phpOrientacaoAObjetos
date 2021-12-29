<?php

public function __get($atributo){

    Validacao::protegeAtributo($atributo);

    return $this->$atributo;

}


public function __set($atributo,$valor){

    Validacao::protegeAtributo($atributo);

    $this->$atributo = $valor;

}