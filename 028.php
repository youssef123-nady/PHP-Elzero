<?php
/*
    =================================
    == 028 error control operators ==
    =================================
    - control the error 
*/

$a = 10;
$b = $a;

// if the variable $a is exsit will print the value of the variable $b
echo $b;        // 10 
echo "<br>";

/*
    if the variable $index is exist will print the value of the variable $start 
    if the variable $index not exist will not print the value of the variable $start
    by using [@]
    if using die() method will print the alternative text that exist on the die() method 
    die()   => stop the scrip 
    if write anything after it will not work. stop the code 
*/
// $index = 10;
// $srart = @$index or die("Variable Not Found");
// echo $srart;        // Variable Not Found
// echo "<br>";


/*
    file()
    - create new file 
    - deal with files
    - read file into array 
    - if the file not exist use [@]
    - also can use die() method 
*/

$f = file('osama.txt');
echo "<pre>";
print_r($f);
echo "</pre>";

// check when the file is not exist 
// can use @
// can use die() to stop scrip if the file is not exist 
$f = @file('osama_elzero.txt');
echo "<pre>";
print_r($f);
echo "</pre>";


/*
    include()
    - create new file 
    - deal with the text that exist inside the file if the file exist 
    - if the file not exist will make error 
    - to prevent error use [@] or die() method 
*/

// print the text inside the file 
include("osama.txt");
echo "<br>";

// if the file is not exist use [@] or die() method
(@include("osama_elzero.txt")) or die("this file is not exist");   
