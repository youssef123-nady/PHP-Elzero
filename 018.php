<?php
/*
    ===================================
    == 018 introduction to constants ==
    ===================================
    - that values can't change during the execution 
    - constants always uppercase 
*/

/*
    define(NAME, value)
    -----------------------------
    define: used to create new constant
    NAME: the name of the constant
    value: the value of the constant
*/
define("DB_NAME", 'elzero');        // create constant
echo DB_NAME;       // elzero
echo "<br>";

define("MAIN_NUMBER", '5');        // create constant
echo MAIN_NUMBER;            // 5
echo "<br>";
echo MAIN_NUMBER * 10;      // 50
echo "<br>";
