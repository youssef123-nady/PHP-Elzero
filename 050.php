<?php
/*
    ========================================
    == 050 passing arguments by reference == 
    ========================================
    - by default function arguments are passed by value
    - if the value of the argument inside the function changed it will not change outside 
    - to change it outside pass the argument by reference 

    return type declarations
*/

function add_five($number){
    return $number += 5;
}

echo add_five(15) . "<br>";       // 20

$num = 15;
echo add_five($num);        // 20
echo "<br>";

// by default function arguments are passed by value
echo $num;      // 15, will not print 20 

/*
===============
== Note That ==
===============
- if the value of the argument inside the function changed it will not change outside 
*/

echo "<br>";

//     - to change it outside pass the argument by reference 
function add_ten(&$n){
    return $n += 10;
}

$index = 10;
echo add_ten($index);        // 20
echo "<br>";

/*
the following variable will be 20 not 10 
because you assign the value by reference using &
*/
echo $index;        // 20
echo "<br>";

// can determine the type of the returned data by using column and the type
function calculate($n1, $n2) : int {
    return $n1 + $n2;
}

echo calculate(10.5, 20.5);     // 31       this is double 
echo "<br>";

echo gettype(calculate(10.5, 20.5));     // integer