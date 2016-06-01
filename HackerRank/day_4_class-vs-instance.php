<?php
class Person{
    public $age;
   public function __construct($initialAge){
          // Add some more code to run some checks on initialAge
       if($initialAge<0){
           $this->age=0;
           print "Age is not valid, setting age to 0.";
           print "\n";
       }else{
           $this->age=$initialAge;
       }

    }
   public  function amIOld(){
            // Do some computations in here and print out the correct statement to the console
       //echo $this->age;
       if($this->age<13){
           print "You are young.";
       }elseif($this->age >= 13 && $this->age < 18){
           print "You are a teenager.";
       }else{
           print "You are old.";
       }
       print "\n";
    }
   public  function yearPasses(){
          // Increment the age of the person in here
          $this->age=$this->age+1;
    }
   
      
}
$T = intval(fgets(STDIN));
 for($i=0;$i<$T;$i++){
     $age=intval(fgets(STDIN));
     $p=new Person($age);
     $p->amIOld();
     for($j=0;$j<3;$j++){
         $p->yearPasses();
     }
     $p->amIOld();
     echo "\n";
         
 }
?>