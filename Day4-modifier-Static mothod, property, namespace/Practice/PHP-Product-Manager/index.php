<?php
include("Models/product.php");
include("Services/productManager.php");
$product = new \Models\Product();
$product->setName("iphone");
$product->setPrice(10000);
$productManager = new \Services\ProductManager();
$productManager->add($product);
$products = $productManager->getProduct();
foreach ($products as $key => $product) {
    echo $product->display() . "<br>";
}
