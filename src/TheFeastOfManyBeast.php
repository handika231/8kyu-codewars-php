<?php
function feast($beast, $dish){
    # Write your code here
    $beastFirstLetter = substr($beast, 0, 1);
    $beastLastLetter = substr($beast, -1);
    $dishFirstLetter = substr($dish, 0, 1);
    $dishLastLetter = substr($dish, -1);
    if ($beastFirstLetter == $dishFirstLetter && $beastLastLetter == $dishLastLetter) {
        return true;
    } else {
        return false;
    }
}

$beast = 'great blue heron';
$dish = 'garlic naan';
$result = feast($beast, $dish);
var_dump( $result); // returns true