<?php
/*
    ==============================
    == 029 operators precedence ==
    ==============================
    - used to perform operations on values

    - [ || ]    has a greater precedence than or 
    - [ && ]    has a greater precedence than and 
*/

echo 2 + 4 * 5;     // 22
echo "<br>";

echo ( 2 + 4 ) * 5;     // 30
echo "<br>";

/*
    any number if true value and that is equal 1
    false equal 0

    ==================
    == false values == 
    ==================
    false   ==> false
    0       ==> zero 
    []      ==> empty array 
    ""      ==> empty string
    ''      ==> empty string

*/
echo 10 || false;       // 1
echo "<br>";

echo True;     // 1
echo "<br>";

var_dump(0 && " ");      // bool(false)
echo "<br>";

var_dump([] && "osama");      // bool(false)
echo "<br>";

var_dump("" || " ");      // bool(true)
echo "<br>";

$a = 10 || false;       // $a = (10 || false) => $a = 1
echo $a;            // 1
echo "<br>";

/*
    =================
    === Note That === 
    =================
*/
$a = 10 or false;       // ($a =10) or false 
echo $a;            // 10
echo "<br>";

$x = 100 or [];         
echo $x;     // ($a =100) or false => $x = 100