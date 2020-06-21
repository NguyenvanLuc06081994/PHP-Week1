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
<form action="" method="post">
<input type="text" name="from" placeholder="From Country">
From Country:
<select name="fromCountry" id="">
    <option value="1">USD</option>
    <option value="23000">VietNam</option>
    <option value="107">Yen</option>
</select>
To Country:
<select name="toCountry" id="">
    <option value="1">USD</option>
    <option value="23000">VietNam</option>
    <option value="107">Yen</option>
</select>
<input type="submit" value="Change">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $from = +$_POST["from"];
    $fromCountry = $_POST["fromCountry"];
    $toCountry = $_POST["toCountry"];
    $result = $from * $toCountry / $fromCountry;
    echo "<br>";
    echo "So Tien chuyen doi la :" . $result ;
}
?>
</body>
</html>
