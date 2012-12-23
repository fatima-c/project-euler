<?php

/*
  http://projecteuler.net/problem=7

  By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see
  that the 6th prime is 13.

  What is the 10 001st prime number?
 */

set_time_limit(0);

$brojac = 2;
$broj = 3;
while ($brojac <= 10001) {
    $broj +=2;
    $primarni = true;
    for ($i = 3; $i < $broj; $i+=2) {
        if ($broj % $i == 0) {
            $primarni = false;
            break;
        }
    }
    if ($primarni) {
        $brojac++;
    }
}
echo $broj;
?>
