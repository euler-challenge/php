<?php

$prev = 1;
$next = 2;
$sum = 2;

while ($next <= 4e+6)
{
    $temp = $prev;
    $prev = $next;
    $next += $temp;

    if ($next % 2 == 0)
    {
        $sum += $next;
    }
}

print "$sum";