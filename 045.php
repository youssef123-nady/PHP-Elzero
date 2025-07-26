<?php
/*
    ==================================
    == 045 function return and echo == 
    ==================================
    - echo: print the value automatically
    - return: store the value, then maybe use it in operations [print, mathematical operations]
    - any data written after return, will not "print" or run
*/

$prizes = ['PC', 'Playstation', 'XBOX', 'Apple TV', 'Laptop', 'iPad', 'iPhone'];
function get_number($num1, $num2){
    echo $num1 + $num2;
}

get_number(1, 2);     // 3
echo "<br>";

echo $prizes[3];    // Apple TV
echo "<br>";

$prize_number = get_number(1, 2);       // 3
echo "<br>";

var_dump($prize_number);        // NULL
echo "<br>";

function get_your_number($numer1){
    return $numer1;
}

$get_number = get_your_number(2);
var_dump($get_number);      // int(2)
echo "<br>";

echo $prizes[$get_number];      // XBOX
echo "<br>";