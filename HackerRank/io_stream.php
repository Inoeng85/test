<?php
$stdin1 = fopen('php://stdin', 'r');
//var_dump($stdin);
$line1 = trim(fgets($stdin1)); // reads one line from STDIN

while($f = fgets($stdin1)){
    echo "line: $f";
}

var_dump($line1);
$number=5;
fscanf($stdin1, "%d\n", $number); // reads number from STDIN
//STDOUT	
//An already opened stream to stdout. This saves opening it with
$stdout = fopen('php://stdout', 'w');
//STDERR	
//An already opened stream to stderr. This saves opening it with
$stderr = fopen('php://stderr', 'w');
?>
