<?php

function digital_root($number): int
{
    while ($number >= 10) {
        $sum = 0;
        while ($number > 0) {
            $sum += $number % 10;
            $number = intdiv($number,10);  
        }
        $number = $sum;  
    }
    return $number;
}