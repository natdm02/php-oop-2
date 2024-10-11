<?php

require_once __DIR__ . '/../MODELS/Products.php';
require_once __DIR__ . '/../EXCEPTIONS/InvalidProduct.php';
require_once __DIR__ . '/../TRAITS/ProductDescript.php';

class Food extends Products {

    use ProductDescript;

    public $weight;
    public $taste;

    public function __construct(string $_name, float $_price, string $_type, string $_image, string $_taste, string $_weight, string $_category)
    {

        if ($_price <= 0){
            throw new InvalidProduct("no 0 o negativo");
        }

        parent::__construct($_name, $_price, $_type, $_image, $_category);
        $this->weight = $_weight;
        $this->taste = $_taste;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getTaste()
    {
        return $this->taste;
    }
}
