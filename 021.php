<?php
/*
    ==============================
    == 021 assignment operators ==
    ==============================
    - used to write value to another 
    [+=]    add value to the original value
    [-=]    subtract value from the original value 
    [*=]    multiply value to the original value
    [/=]    divide value to the ooriginal value
    [%=]    mod value to the original value
    [**=]   get the power of the given number with the original value
*/

$a = 10;
$a = $a + 20;   
echo $a;        // 30
echo "<br>";
echo $a+= 10;       // 40
echo "<br>";

echo $a - 5;        // 35
echo "<br>";

echo $a *= 10;      // 400
echo "<br>";