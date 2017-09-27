<?php

$n = 0;

while ($n <= 1000)
{
    if ($n % 3 == 0 || $n % 5 == 0) {
        if ($n == 1000)
            print $n;
        else
            print "$n, ";
    }
    $n++;
}