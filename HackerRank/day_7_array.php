<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');
$reversed = array_reverse($arr);

function test_print($item2)
{
    echo $item2 . " " ;
}

array_walk($reversed,'test_print');

?>