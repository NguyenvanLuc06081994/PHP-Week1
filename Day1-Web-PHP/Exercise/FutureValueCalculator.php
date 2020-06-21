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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $money = $_POST["money"];
    $rate = $_POST["rate"];
    $year = $_POST["year"];
      for ($i = 1; $i <= $year; $i++) {
        $money = $money * (1 + $rate);
    }
    echo "Tien Lai sau $year nam la ".$money. ".";

}
?>
<form action="" method="post">
    <input type="text" name="money" placeholder="Your money">
    <input type="text" name="rate" placeholder="Lai Xuat">
    <input type="text" name="year" placeholder="Year">
    <input type="submit" id="submit" value="Calculate">
</form>
</body>
</html>
