<?php

$dataset = range(11, 88);

function countDivisibleBy5(array $numbers): int
{
    $result = 0;
    foreach ($numbers as $number) {
        if (preg_match('/^\d*[05]$/', $number)) {
            $result += $number;
        }
    }

    return $result;
}

countDivisibleBy5($dataset);