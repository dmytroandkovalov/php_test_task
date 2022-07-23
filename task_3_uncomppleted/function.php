<?php

$testDatasets = [
    [3, 4, -2, -10, 8],
    [1, 2, -4, -5, 7],
    [1, 2, 3, -3, -1],
    [1, 2, -4],
];

function countTransposition(array $companyMonthlyProfits)
{
    if (array_sum($companyMonthlyProfits) < 0) {
        return false;
    }

    $currentProfit = 0;
    $countTransposition = 0;

    foreach ($companyMonthlyProfits as $companyMonthlyProfit) {
        $currentProfit += $companyMonthlyProfit;

        if ($currentProfit) {

        }
    }

}

foreach ($testDatasets as $str => $actualResult) {
    if (countTransposition($str) !== $actualResult) {
        throw new Exception(sprintf("String '%s' isn't valid", $str));
    }
}
