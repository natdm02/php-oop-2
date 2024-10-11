<?php
class InvalidProduct extends Exception {
    public function _construct($message = "prodotto non valido", $code= 0, Exception $previous = null){
        parent::__construct($message, $code, $previous);

    }

    public function errorMessage(){
        return "errore:" . $this->getMessage();
    }
}