<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_POST['price'];
    $name = $_POST['name'];
    $discount = $_POST['discount'];
    $result = $price * $discount * 0.1;
    echo "Luong chiet khau cua san pham $name la : " . $result . ".";
}
