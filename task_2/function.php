<?php

$expectedTestStringsChecks = [
    'aabbb' => true,
    'aabbbbbbbbab' => true,
    'aabbba' => false,
    'aaa' => true,
    'bb' => true,
];

function checkString(string $str):bool
{
    $regexps = [
        '/^a{2,}$/',
        '/^b{2,}$/',
        '/[ab]*a?+b$/',
    ];

    foreach ($regexps as $regexp) {
        if (preg_match($regexp, $str)) {
            return true;
        }
    }

    return false;
}

foreach ($expectedTestStringsChecks as $str => $actualResult) {
    if (countTransposition($str) !== $actualResult) {
        throw new Exception(sprintf("String '%s' isn't valid", $str));
    }
}
