<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    $distance = 0;

    //Check lengths and throw exception if they are not equal
    if (strlen($a) !== strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    //Only try to count hamming distance if content of strings do not match
    if (!!strcmp($a, $b)) {
        //Count hamming distance
        for ($i = 0; $i < strlen($a); $i++) {
            $distance += $a[$i] !== $b[$i] ? 1 : 0;
        }
    }

    return $distance;
}
