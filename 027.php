<?php
/*
    =========================
    == 027 array operators ==
    =========================
    - deal with array 

    [+]        union
    [==]       equal     => same key and value
    [!=]       not equal
    [<>]       not equal
    [===]      identical
    [!==]      not identical
*/
$arr1 = [1 => "A", 2 => "B"];
$arr2 = [3 => "C", 4 => "D"];

// concatenate the 2 arrays
echo "<pre>";
print_r($arr1 + $arr2);
echo "<br>";
echo "</pre>";

// concatenate the 2 arrays in a variable
$array = $arr1 + $arr2;
echo "<pre>";
print_r($array);
echo "<br>";
echo "</pre>";

$arr3 = [1 => "A", 2 => "B"];
$arr4 = [1 => "A", 2 => "B"];

/*
    [==]        means equal 
    check the value of the data 
    check that the same key and the same value exists 
    do not check the type of the data only values

*/
var_dump($arr3 == $arr4);       // bool(true)
echo "<br>";

echo $arr3 == $arr4;        // 1 
echo "<br>";

var_dump($arr2 == $arr4);       // bool(false)
echo "<br>";

/*
    [!=]        means not equal 

*/
var_dump($arr3 != $arr4);       // bool(false)
echo "<br>";

var_dump($arr2 != $arr4);       // bool(true)
echo "<br>";

var_dump($arr3 <> $arr4);       // bool(false)
echo "<br>";

/*
    [===]        means identical 
    check that there are 
    - same key
    - same value
    - same order
    - same type
*/
$arr5 = [1 => "A", 2 => "B"];
$arr6 = [1 => "A", 2 => "B"];
$arr7 = [1 => "200", 2 => "100"];
$arr8 = [1 => 200, 2 => 100];

var_dump($arr5 === $arr6);      // bool(true)
echo "<br>";

var_dump($arr7 === $arr8);      // bool(false)