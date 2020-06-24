<?php
namespace Services;
class ProductManager{


    private $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function add($product)
    {
        array_push($this->products,$product);
    }

    public function getProduct()
    {
        return $this->products;
    }
}