<?php

$n = 1;
$sum = 0;

while ($n < 1000)
{
    if ($n % 3 == 0 || $n % 5 == 0) {
        $sum += $n;
    }
    $n++;
}
print $sum;