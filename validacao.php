<?php

class Validacao{
    public static function protegeAtributo($atributo){
            if ($atributo == "tiular" || $atributo == "saldo") {
                throw new Exception("O atributo $atributo continua privado");
            }
        }



    public static function verificaNumerico($valor){

        if (! is_numeric($valor)) {
            throw new Exception("O atributo $atributo continua privado");
        }

    }
}
?>