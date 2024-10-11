<?php


require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/../TRAITS/ProductDescript.php';


class Toy extends Products

{

    use ProductDescript;
    
    public $material;
    public $size;



    public function __construct(string $_name, float $_price, string $_type, string $_image, string $_material, string $_size, string $_category)

    {
        parent::__construct($_name, $_price, $_type, $_image, $_category);

        $this->material = $_material;
        $this->size = $_size;
    }

    public function getMaterial()

    {
        return $this->material;
    }

    public function getSize()
    
    {
        return $this->size;
    }
}