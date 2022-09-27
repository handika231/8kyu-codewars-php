<?php
function quarterOf($month) {
    // Your code here
    return ceil($month / 3);
}

$month = 8;
echo quarterOf($month); // returns 3