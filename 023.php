<?php
/*
    ======================================
    == 023 comparision operators part 2 ==
    ======================================
    - used to compare two values

    >       larger than 
    >=      larger than or equal 
    <       smaller than 
    <=      smaller than or equal 
    <=>     spaceship [less than, equal or greeter]

*/

var_dump(100 > 50);     // true
echo "<br>";

var_dump(100 >= 100);     // true
echo "<br>";

var_dump(100 < 50);       // false
echo "<br>";

var_dump(100 <= 50);       // false
echo "<br>";

/*
    return -1 if the value smaller 
    return 0 if the value is equal 
    return 1 if the value is larger 
*/
var_dump(100 <=> 200);       // -1
echo "<br>";

var_dump(300 <=> 200);       // 1
echo "<br>";

var_dump(300 <=> 300);       // 0