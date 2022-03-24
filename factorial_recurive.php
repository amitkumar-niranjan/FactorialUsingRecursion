<?php

/*
 * Complete 'factorial' function using recursion in php below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function factorial($n) {
    // Base varible 0 means 1
    if($n == 0){
        $n=1;
    }else{
       $n = $n * factorial($n-1); 
    }
    return $n;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = factorial($n);

fwrite($fptr, $result . "\n");

fclose($fptr);
