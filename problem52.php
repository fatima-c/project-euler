<?php

/*
  http://projecteuler.net/problem=52

  It can be seen that the number, 125874, and its double, 251748, contain exactly
  the same digits, but in a different order.

  Find the smallest positive integer, x, such that 2x, 3x, 4x, 5x, and 6x,
  contain the same digits.

 */

function poredjenje($x, $y) {
    $x = strval($x);
    $y = strval($y);

    for ($i = 0; $i < (strlen($x)); $i++) {
        if (strpos($y, $x[$i]) === false) {
            return false;
        }
    }

    for ($i = 0; $i < (strlen($y)); $i++) {
        if (strpos($x, $y[$i]) === false) {
            return false;
        }
    }

    return true;
}

function mnozenje($x) {
    for ($c = 2; $c <= 6; $c++) {
        if (!poredjenje($x, $x * $c)) {
            return false;
        }
    }
    return true;
}

$x = 1;

while (!mnozenje($x)) {

    $x++;
}
echo $x . "<br>";
echo ($x * 2) . "<br>";
echo ($x * 3) . "<br>";
echo ($x * 4) . "<br>";
echo ($x * 5) . "<br>";
echo ($x * 6) . "<br>";
?>
