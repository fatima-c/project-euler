<?php

/*
  http://projecteuler.net/problem=4

  A palindromic number reads the same both ways. The largest palindrome made from
  the product of two 2-digit numbers is 9009 = 91 99.

  Find the largest palindrome made from the product of two 3-digit numbers.
 */

for ($i = 999; $i >= 100; $i--) {
    for ($j = 999; $j >= $i; $j--) {
        $x = $i * $j;
        if ($x == strrev($x)) {
            echo "$i x $j = $x";
            die();
        }
    }
}
?>
