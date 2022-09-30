<?php
//Complete the function that calculates the area of the red square, when the length of the circular arc A is given as the input. Return the result rounded to two decimals.


function square_area($A)
{
    return round(pow($A * 4 / pi(), 2), 2);
}

var_dump(square_area(14.05)); // 1.62