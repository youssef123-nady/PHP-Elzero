<?php
/*
    ===========================
    == 025 logical operators ==
    ===========================
    - used to compare conditions

    [and]   two are true
    [&&]    two are true
    [or]    one or both are true
    [||]    one or both are true
    [xor]   one is true but not both 
    [!]     not true
*/

// and  ==> all conditions are true
var_dump(10 == 10 and 10 == 10);        // true 
echo "<br>";

// &    ==> all conditions are true
var_dump(10 == 10 and 10 == 10);        // true 
echo "<br>";

var_dump(120 == 10 and 10 == 10);        // false 
echo "<br>";

// or   ==> one or more condition true
var_dump(120 == 10 or 10 == 10);        // true 
echo "<br>";

var_dump(120 == 10 || 10 == 10);        // true 
echo "<br>";

// xor      ==> one condition true not both only one 
var_dump(120 == 10 xor 10 == 10);        // true 
echo "<br>";

var_dump(120 == 120 xor 10 == 10);        // false 
echo "<br>";

var_dump(120 != 120 );        // false 
echo "<br>";

var_dump(110 != 120 );        // true 