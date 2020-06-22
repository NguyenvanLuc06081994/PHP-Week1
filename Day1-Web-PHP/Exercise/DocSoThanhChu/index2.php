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
    <input type="text" name="number" placeholder="Input number">
    <input type="submit" value="Read">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    function oneWord($number)
    {
        $hangDonVi = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
        return $hangDonVi[$number];
    }

    function twoWord($number)
    {
        $hangMuoi = [10 => "ten", 11 => "eleven", 12 => "twelve", 13 => "thirteen", 14 => "fourteen", 15 => "fifteen", 16 => "sixteen", 17 => "seventeen", 18 => "eighteen", 19 => "nineteen"];
        $hangChuc = [2 => "twenty", 3 => "thirty", 4 => "forty", 5 => "fifty", 6 => "sixty", 7 => "seventy", 8 => "eighty", 9 => "ninety"];
        if ($number < 20) {
            return $hangMuoi[$number];
        }
        if ($number[1] === 0) {
            return $hangChuc[$number[0]];
        }
        return $hangChuc[$number[0]] . " " . oneWord($number[1]);

    }

    function threeWord($number)
    {
        if ($number % 100 === 0) {
            return oneWord($number[0]) . " hundred";
        } elseif ($number[1] === 0) {
            return oneWord($number[0]) . "hundred and " . oneWord($number[0]);
        } else {
            return oneWord($number[0]) . " " . "hundred and " . twoWord(substr($number, 1, 2));
        }
    }

    function readWord($number)
    {
        switch (strlen($number)) {
            case 1 :
                $word = oneWord($number);
                break;
            case 2 :
                $word = twoWord($number);
                break;
            case 3 :
                $word = threeWord($number);
                break;
            default :
                $word = "Can't read";
                break;
        }
        return $word;
    }

    echo readWord($number);
}

?>
</body>
</html>