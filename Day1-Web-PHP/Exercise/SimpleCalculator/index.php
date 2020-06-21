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
    $number1 = +$_POST["number1"];
    $number2 = +$_POST["number2"];
    $operator = $_POST["operator"];
    $result = 0;
    if ($operator === "add"){
        $result = $number1 + $number2;
    }
    if ($operator === "sub"){
        $result = $number1 - $number2;
    }
    if ($operator === "multi"){
        $result = $number1 * $number2;
    }
    if ($operator === "div"){
        if ($number2 === 0){
            echo "KHong chia duoc cho 0";
            return;
        }else{
            $result = $number1 / $number2;
        }
    }
    echo $result;
}
?>
<form action="" method="post">
    First Operand: <input type="text" name="number1" placeholder="number">
    Operator: <select name="operator">
        <option value="add">Add</option>
        <option value="sub">Sub</option>
        <option value="multi">multi</option>
        <option value="div">div</option>
    </select>
    Second Operand: <input type="text" name="number2" placeholder="number2">
    <input type="submit" id="submit" value="Calculate">
</form>
</body>
</html>