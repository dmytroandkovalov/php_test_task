<?php

$datasets = [
    '165738263',//41,
    '23456',//20
    '2',//2
    '7643',//20
];

function countUserNumbers(string $userNumbers): int
{
    $result = 0;
    foreach (str_split($userNumbers) as $userNumber) {
        if(is_numeric($userNumber)) {
            $result += $userNumber;
        }
    }

    return $result;
}

foreach ($datasets as $dataset) {
    var_dump(countUserNumbers($dataset));
}
