<?php

/*
  http://projecteuler.net/problem=45

  The number 3797 has an interesting property. Being prime itself, it is possible
  to continuously remove digits from left to right, and remain prime at each
  stage: 3797, 797, 97, and 7. Similarly we can work from right to left:
  3797, 379, 37, and 3.

  Find the sum of the only eleven primes that are both truncatable from left to
  right and right to left.

  NOTE: 2, 3, 5, and 7 are not considered to be truncatable primes.
 */

function primarni($i) {
    if ($i % 2 == 0) {
        return false;
    }
    for ($j = 3; $j < $i; $j+=2) {
        if ($i % $j == 0) {
            return false;
        }
    }
    return true;
}

$niz = array();

for ($i = 11; $i < 10000; $i+=2) {

    if (primarni($i)) {
        for ($j = -strlen($i) + 1; $j < strlen($i); $j++) {
            if ($j < 0) {
                $a = substr($i, 0, $j);
            } else if ($j == 0) {
                continue;
            } else {
                $a = substr($i, $j);
            }

            if (!primarni($a)) {
                continue 2;
            }
        }
        $niz[] = $i;
        if (count($niz) >= 11) {
            break;
        }
    }
}

echo array_sum($niz);
?>