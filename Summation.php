<?php
function summation($n) {
    // Your code here
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

$result = summation(8);
echo $result; // returns 36