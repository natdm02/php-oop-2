<?php


class Products 
{
    public $name;
    public $price;
    public $type;
    public $image;
    public $category;

    public function __construct(string $_name, float $_price, string $_type, string $_image, string $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
        $this->image = $_image;
        $this->category = $_category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getCategory()
    {
        return $this->category; 
    }
}