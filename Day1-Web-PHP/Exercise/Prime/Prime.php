<?php
function isPrime($number)
{
    if ($number < 2) {
        return false;
    } else {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }

}

function countPrime()
{
    for ($i = 2; $i <= 100; $i++) {
        if (isPrime($i)) {
            echo $i . "<br>";
        }
    }

}

countPrime();