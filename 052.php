<?php
/*
    ========================
    == 052 arrow function == 
    ========================
    - short syntax for anonymous function 
    - automatic use variables from parent scope 

    syntax
    ---------
    - function replaces with fn
    - no need for curly braces
    - return is omitted
*/

// create new function 
$say_hello = function ($name){
    return "Hello $name";
};

echo $say_hello("Osama");       // Hello Osama
echo "<br>";

// create arrow function 
$say_hi = fn($name) => "Hello $name";

// arrow function call 
echo $say_hi("Ahmed");       // Hello Ahmed
echo "<br>";

// create arrow function 
$add_five = fn($num) => $num + 5;
echo $add_five(10);     // 15
echo "<br>";
echo $add_five(20);     // 25
echo "<br>";

// arrow function automatically inherit variables from parent scope
$msg = 'hello world';
$print_mesage = fn() => $msg;
echo $print_mesage();       // hello world
echo "<br>";

$numbers = [1, 2, 3, 4, 5];
$numbers_after_adding_five = array_map(fn($item) => $item+5, $numbers);
echo "<pre>";
print_r($numbers_after_adding_five);
echo "</pre>";