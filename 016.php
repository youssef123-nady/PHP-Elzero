<?php
/*
    ==========================================
    == 016 assign by value and by reference ==
    ==========================================
    - by default, variables are always assigned by value
    - assigned by reference make variable alias or point to another 
*/
$a = "Osama";       // assign by value 
$b = $a;            // assign by value 

echo $a;        // Osama
echo "<br>";

echo $b;
echo "<br>";        // OSama 

// last value of variable will be applied 
$a = &$b;       // assign by reference 
$a = "ali";
$b = 'Hassan';          // this is the value that will applied 

echo $a;        // Hassan
echo "<br>";

echo $b;
echo "<br>";        // Hassan 