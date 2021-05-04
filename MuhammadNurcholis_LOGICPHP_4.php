<?php
$i = 1;

function getEvenOdd($number)
{
    if ($number == 0) {
        return null;
    }

    if ($number <= 10) {
        $num = $number;
        if ($number % 2 == 0) {
            echo $number . " Bilangan Genap\n";
        } else {
            echo $number . " Bilangan Ganjil\n";
        }

        $num += 1;

        getEvenOdd($num);
    }
}

getEvenOdd($i);
