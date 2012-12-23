<?php

/*
  http://projecteuler.net/problem=14

  The following iterative sequence is defined for the set of positive integers:

  n -> n/2 (n is even)
  n -> 3n + 1 (n is odd)

  Using the rule above and starting with 13, we generate the following sequence:

  13 -> 40 -> 20 -> 10 -> 5 -> 16 -> 8 -> 4 -> 2 -> 1

  It can be seen that this sequence (starting at 13 and finishing at 1) contains
  10 terms. Although it has not been proved yet (Collatz Problem), it is thought
  that all starting numbers finish at 1.

  Which starting number, under one million, produces the longest chain?

  NOTE: Once the chain starts the terms are allowed to go above one million.
 */

function djeljenje($broj, $prikazi = false) {
    $brojac = 1;
    while ($broj > 1) {
        if ($broj % 2 == 0) {
            $broj = $broj / 2;
        } else {
            $broj = ($broj * 3) + 1;
        }
        $brojac++;
        if ($prikazi) {
            echo $broj . ' ';
        }
    }
    return $brojac;
}

set_time_limit(0);

$max = 0;
$stari_max = 0;
$pozicija = 0;
for ($i = 0; $i < 1000000; $i++) {
    $brojac = djeljenje($i);
    $max = max($max, $brojac);
    if ($max != $stari_max) {
        $pozicija = $i;
    }
    $stari_max = $max;
}

echo $max . "<br/>";
echo $pozicija . '<br/>';
djeljenje($pozicija, true);
?>