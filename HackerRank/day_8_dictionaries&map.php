<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$arr_input = array();
$arr_output = array();
$count=0;
$i=0;
$j=0;
if ($_fp) {
    while (($line = fgets($_fp)) !== false) {
        // process the line read.   
        if($i!=0){
           if($count>=$i){
               $arr = explode(" ", $line);
               //var_dump($arr);
               $arr_input[$arr[0]] = $arr[1];
                //var_dump($arr_input);
           }else{
               //$arr_output[$i] = $line;
               //var_dump($line);
               //$line = strip_tags(nl2br($line));
               //var_dump($arr_input);
               $line = trim(preg_replace('/\s\s+/', ' ', $line));
               //$line2 = nl2br($line);
               //$line2 = strip_tags($line2,'<br />');
               //var_dump($line);
               if (array_key_exists($line, $arr_input)) {
                    echo $line . "=" . $arr_input[$line];
                }else{
                   echo "Not found";
                   print "\n";
               }
               //print "\n";
           }
           
        }else{
           $count = $line;
        }
        
        $i++;
    }

    fclose($_fp);
}
//var_dump($count);
//var_dump($arr_input);
//var_dump($arr_output);
?>