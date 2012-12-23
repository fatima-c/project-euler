<?php

/*
  http://projecteuler.net/problem=48

  The series, 1^1 + 2^2 + 3^3 + ... + 10^10 = 10405071317.

  Find the last ten digits of the series, 1^1 + 2^2 + 3^3 + ... + 1000^1000.

  Rijesenje za 10 radi ali ne moze izracunati sumu za 1000 jer je prevelik broj
 */

set_time_limit(0);

$a = array();
//for ($i = 1; $i <= 10; $i++) {
for ($i = 1; $i <= 1000; $i++) {
    $c = pow($i, $i);
    $a[] = $c;
}
echo array_sum($a);
?>
