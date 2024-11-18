<?php

function expanded_form(int $n): string {
    $result = [];
    $str = (string)$n;
    $len = strlen($str);

    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] != '0') {
            $result[] = $str[$i] . str_repeat('0', $len - $i - 1);
        }
    }

    return implode(' + ', $result);
}