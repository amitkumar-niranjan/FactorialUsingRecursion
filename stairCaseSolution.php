<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */
// $handle = fopen ("php://stdin","r");
function symbol()
{
    $symbol = "#";
    return $symbol;
}
function space()
{
   $space = " "; 
   return $space;
}
function staircase($n) {
    // Write your code here
    $sp_tot = "";
    $sb_tot = "";
    $tot = "";
    for($i=0;$i<$n;$i++)
    {
       for($j=$i;$j<$n-1; $j++)
       {
          $sp_tot = $sp_tot.space();
       }
       echo $sp_tot;
       $sp_tot="";
       for($k=0;$k<=$i;$k++)
       {
           $sb_tot = $sb_tot.symbol();
       }
       echo $sb_tot;
       $sb_tot="";
       echo "\n";
    }
    
}

// $n = intval(trim(fgets(STDIN)));
$n = 6; // integer value only
staircase($n);

// fclose($handle);