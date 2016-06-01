<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$arr = array();
$i=0;
if ($_fp) {
    while (($line = fgets($_fp)) !== false) {
        // process the line read.
        $arr[$i] = $line;
        $i++;
    }

    fclose($_fp);
}


$mealCost = $arr[0] ;
$tip = $mealCost * ($arr[1]/100);
$tax = $mealCost * ($arr[2]/100);

$totalCost = $mealCost + $tip + $tax;

echo "The total meal cost is ".round($totalCost)." dollars.";

?>