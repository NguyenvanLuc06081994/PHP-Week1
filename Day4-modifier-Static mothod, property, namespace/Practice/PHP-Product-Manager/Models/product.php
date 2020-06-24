<?php

namespace Models;
class Product
{
    private $name;
    private $price;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function __construct($name = null, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function display()
    {
        echo "san pham la : ". $this->getName(). " ";
        echo "va co gia la :" .$this->getPrice();
    }

}