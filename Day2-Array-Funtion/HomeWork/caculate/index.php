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
    <input type="text" name="x" placeholder="input X">
    <select name="calculator" id="">
        <option value="add">ADD</option>
        <option value="sub">SUB</option>
        <option value="multi">Multi</option>
        <option value="div">Div</option>
    </select>
    <input type="text" name="y" placeholder="input Y">
    <input type="submit" value="Cal">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $x = +$_POST['x'];
    $y = +$_POST['y'];
    $cal = $_POST['calculator'];

    if (empty($x) && empty($y)) {
        echo "khong de trong x va y";
    }
    if ($cal === "add") {
        $result = $x + $y;
    }
    if ($cal === "sub") {
        $result = $x - $y;
    }
    if ($cal === "multi") {
        $result = $x * $y;
    }
    if ($cal === "div") {
        if ($y === 0) {
            echo "khong chia duoc cho 0";
            return;
        } else {
            $result = $x / $y;
        }
    }
    echo $result;
}
?>
</body>
</html>
