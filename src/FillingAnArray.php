<?php

//We want an array, but not just any old array, an array with contents!
//
//Write a function that produces an array with the numbers 0 to N-1 in it.
//
//For example, the following code will result in an array containing the numbers 0 to 4


function arr(int $n= 0): array
{
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        $arr[] = $i;
    }
    return $arr;
}

var_dump(arr(0)); // [0, 1, 2, 3, 4]