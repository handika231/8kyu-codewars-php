<?php

function no_space(string $s): string {
    // Your code here
    return str_replace(' ', '', $s);
}

$test = 'Hello World';

$result = no_space($test);
echo $result; // returns 'HelloWorld'


