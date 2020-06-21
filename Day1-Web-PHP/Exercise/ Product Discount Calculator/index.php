<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $price = $_POST['price'];
    $name = $_POST['name'];
    $discount = $_POST['discount'];
    $result = $price * $discount * 0.1;
    echo "Luong chiet khau cua san pham $name la : ".$result.".";
}
?>
<form action="display.php" method="post">
    <input type="text" name="name" placeholder="Name of product">
    <input type="text" name="price" placeholder="List Price">
    <input type="text" name="discount" placeholder="Discount Percent">
    <input type="submit" value="Calculate">
</form>
</body>
</html>