<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);

if ($N%2!=0){
    print "Weird"; 
}else{
    if(($N>=2) && ($N<=5)){
        print "Not Weird";
    }elseif(($N>=6) && ($N<=20)){
        print "Weird";
    }elseif($N>20){
        print "Not Weird";
    }   
    
}

?>