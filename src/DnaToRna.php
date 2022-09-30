<?php
function dnaToRna($str) {
    // your code here
  return  str_replace("T", "U", $str);
}

var_dump(dnaToRna("GCAT")); // "UUUU"