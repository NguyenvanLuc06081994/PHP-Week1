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
    <input type="text" name="number" placeholder="Input number of Prime that you want to print">
    <input type="submit" value="Print">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function isPrime($num)
    {
        if ($num < 2) {
            return false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i === 0) {
                    return false;
                }
            }
            return true;
        }
    }

    function countPrime()
    {
        $N = 2;
        $numbers = +$_POST["number"];
        for ( $count = 0;$count < $numbers;) {
            if (isPrime($N)) {
                echo $N . "<br>";
                $count++;
            }
            $N++;
        }
    }

    countPrime();
}
?>
</body>
</html>
