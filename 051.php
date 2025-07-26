<?php
/*
    ============================
    == 051 anonymous function == 
    ============================
    - when you create a function we give it a name so we can call it later with that name 
    - sometimes we need to create a function for a specific task <= this is not against DRY
    
    - variable inherit from parent scope 
    - variable inherit by reference from parent scope 
    - anonymous function can be passed to a function 
    - anonymous function can be return from a function 

    search about "closure"
*/

// create normal function 
function say_hello_to($someone){
    echo "Hello {$someone}" . "<br>";
}

say_hello_to("Osama");      // Hello Osama
echo "<hr>";

// create anonymous function 
$say_hello = function(){
    return "Hello";
};      // remember to close the statement "variable" with semi-colomn

echo $say_hello();      // Hello
echo "<hr>";

$func1 = function($name){
    return "Hello $name" . "<br>";
};      // close the variable statement with ;

echo $func1("Ahmed");       // Hello Ahmed
echo "<hr>";

/*
    inherit variable from parent scope
    to inherit variables from global scope you can make it by [use()]
*/
$message = "Hi";
$say_hi = function($name) use($message){
    return "$message $name" . "<br>";
};      // close the variable statement with ;

echo $say_hi("Ahmed");       // Hello Ahmed
echo "<hr>";

$numbers = [10, 20, 30, 40, 50];
function add_five($item){
    return $item += 5;
}

/*
    use array_map() function 
    applies the callback to the elements of the given arrays
    this take function, and array 
*/ 
$numbers_after_add = array_map("add_five", $numbers);

echo "<pre>";
print_r($numbers_after_add);
echo "</pre>";
echo "<hr>";

// create another anonymous function 
// array_map(): is a function that take function and array 
$nums_after_adding_ten = array_map(function($item){ return $item + 10; }, $numbers);
echo "<pre>";
print_r($nums_after_adding_ten);
echo "</pre>";
echo "<hr>";
