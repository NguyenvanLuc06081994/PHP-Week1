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
    <input type="number" name="number" placeholder="Input number">
    <input type="submit" value="Read">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $number = $_POST['number'];
    if ($number >= 0 && $number < 10){
        switch ($number){
            case 0 : echo "zero" ; break;
            case 1 : echo "one"; break;
            case 2 : echo "two"; break;
            case 3 : echo "three"; break;
            case 4 : echo "four"; break;
            case 5 : echo "five"; break;
            case 6 : echo "six"; break;
            case 7 : echo "seven"; break;
            case 8 : echo "eight"; break;
            case 9 : echo "nine"; break;
        }
    }elseif ($number < 20){
        switch ($number){
            case 10 : echo "ten"; break;
            case 11 : echo "eleven"; break;
            case 12 : echo "twelve"; break;
            case 13 : echo "thirteen"; break;
            case 14 : echo "fourteen"; break;
            case 15 : echo "fifteen"; break;
            case 16 : echo "sixteen"; break;
            case 17 : echo "seventeen"; break;
            case 18 : echo "eighteen"; break;
            case 19 : echo "nineteen"; break;

        }
    }elseif ($number < 100){
        $first = $number[0];
        $second = $number[1];
        switch ($first){
            case 2 : echo "twenty"; break;
            case 3 : echo "thirty"; break;
            case 4 : echo "forty"; break;
            case 5 : echo "fifty"; break;
            case 6 : echo "sixty"; break;
            case 7 : echo "seventy"; break;
            case 8 : echo "eighty"; break;
            case 9 : echo "ninety"; break;
        }
        switch ($second){
            case 0 : echo "" ; break;
            case 1 : echo "one"; break;
            case 2 : echo "two"; break;
            case 3 : echo "three"; break;
            case 4 : echo "four"; break;
            case 5 : echo "five"; break;
            case 6 : echo "six"; break;
            case 7 : echo "seven"; break;
            case 8 : echo "eight"; break;
            case 9 : echo "nine"; break;
        }
    }elseif ($number< 1000){
        $first = $number[0];
        $second = $number[1];
        $third = $number[2];
        switch ($first){
            case 1 : $first = "one"; break;
            case 2 : $first = "two"; break;
            case 3 : $first = "three"; break;
            case 4 : $first = "four"; break;
            case 5 : $first = "five"; break;
            case 6 : $first = "six"; break;
            case 7 : $first = "seven"; break;
            case 8 : $first = "eight"; break;
            case 9 : $first = "nine"; break;
        }
        switch ($second){
            case 0 : $second = ""; break;
            case 1 : $second = "";
            switch ($third){
                case 0 : $third = "ten"; break;
                case 1 : $third = "eleven"; break;
                case 2 : $third = "twelve"; break;
                case 3 : $third = "thirteen"; break;
                case 4 : $third = "fourteen"; break;
                case 5 : $third = "fifteen"; break;
                case 6 : $third = "sixteen"; break;
                case 7 : $third = "seventeen"; break;
                case 8 : $third = "eighteen"; break;
                case 9 : $third = "nineteen"; break;
            }
            break;
            case 2 : $second = "twenty"; break;
            case 3 : $second = "thirty"; break;
            case 4 : $second = "forty"; break;
            case 5 : $second = "fifty"; break;
            case 6 : $second = "sixty"; break;
            case 7 : $second = "seventy"; break;
            case 8 : $second = "eighty"; break;
            case 9 : $second = "ninety"; break;
        }
        switch ($third){
            case 0 : $third = "" ; break;
            case 1 : $third =  "one"; break;
            case 2 : $third =  "two"; break;
            case 3 : $third =  "three"; break;
            case 4 : $third =  "four"; break;
            case 5 : $third =  "five"; break;
            case 6 : $third =  "six"; break;
            case 7 : $third =  "seven"; break;
            case 8 : $third =  "eight"; break;
            case 9 : $third =  "nine"; break;
        }
        if ($second === "" && $third === ""){
            echo "$first hundred";
        }else{
            echo "$first hundred and $second $third";
        }

    }



}
?>
</body>
</html>
