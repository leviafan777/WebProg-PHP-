<?php

function square_digits($num): int {
    $result = '';
    while ($num > 0) {
        $digit = $num % 10;
        $result = ($digit * $digit) . $result;
        $num = intdiv($num, 10);
    }
    
    return (int)$result;
}