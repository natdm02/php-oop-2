<?php

trait ProductDescript {
    public function getDescription(){
        return "prototipo di" . $this->type . "categoria" . $this->category;
    }
}