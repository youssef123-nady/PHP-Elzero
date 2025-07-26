<?php
/*
    ===================================
    == 049 function variable and function exists == 
    ====================================
    variabel function 
    -------------------
    - PHP allow to use variable like function
    - when you append parentheses () to variable php will look for function with that name 
    function exists
    ---------------------
    - function_exists("func name");
*/

function one(){
    echo "one from function" . "<br>";
}

/*
    when create variable that have the same name of the function 
    the variable will get the function job
    the variable must take parentheses
*/
$func_one = "one"; 
echo $func_one();     // one from function
echo "<hr>";

function say_hello_to($someone){
    echo "Hello $someone";
}

$func_two = "say_hello_to";
echo $func_two("Ahmed");        // Hello Ahmed
echo "<hr>";

// function_exists()    used to check if the if exists or not 

// check if the function is exist
if (function_exists("test")){
    echo test();
}

// check if the function is not exist 
else{
    echo "function not found";      // function not found
}

echo "<hr>";

function hello(){
    return "Hello";
}

if (function_exists("hello")){
    echo hello();       // Hello
}else{
    echo "function is not exist";
}

echo "<hr>";

// strlen(): built in function used to get the number of string 
echo strlen("Osama");       // 5
echo "<br>";

$func_three = "strlen";
echo $func_three("Osama");      // 5
echo "<br>";
echo strlen("Osama");       // 5
