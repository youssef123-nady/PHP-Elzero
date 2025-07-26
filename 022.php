<?php
/*
    ======================================
    == 022 comparision operators part 1 ==
    ======================================
    - used to compare two values
    - return boolean values

    -> [==]     equal 
    -> [!=]     not equal 
    -> [<>]     not equal 
    -> [===]    identical 
    -> [!==]    not identical
*/

// test equal [==]
// test the value of the data only
var_dump(100 == 100);   // true
echo '<br>';

var_dump(100 == "100");   // true
echo '<br>';

var_dump(100 == "100.0");   // true
echo '<br>';

// test not equal [!=]
// test the value of the data only
var_dump(100 != 100);   // false
echo '<br>';

var_dump(100 != "100.0");   // false 
echo '<br>';

// test not equal [<>]
// test the value of the data only
var_dump(100 <> 100);   // false
echo '<br>';

////////////////////////////////////////////////////////////////////

// test identical [===]
// test the value of the data and the type of the data 
var_dump(100 === 100);      // true
echo '<br>';

var_dump(100 === '100');      // false
echo '<br>';

var_dump(100.0 === 100);      // false
echo '<br>';

// test not identical 
var_dump(100.0 !== 100);        // true
echo '<br>';

var_dump(100.0 !== "100");        // true
echo '<br>';