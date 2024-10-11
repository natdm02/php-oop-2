<?php

trait Describable{
    public function getDescription(){
        return "prodotto di categoria {$this->category} chiamato {$this->name}, disponibile a {$this->price}€";
    }
}