<?php
/*
    ==============================
    == 020 arithmetic operators ==
    ==============================
    operators
    ---------------
    - used to perform operations on values
    
    arithmetic operators
    ----------------------
    - used to do arithmetical operations & conversion 
    [+] 
    [-] 
    [*] 
    [/] 
    [%] 
    [**] 
    [+$a] 
    [-$a]   
*/

echo 10 + 20;       // 30 
echo "<BR>";
echo gettype(10 + 20);      // integer 
echo "<BR>";

echo 9.5 + 20.5;        // 30 
echo "<BR>";
echo gettype(9.5 + 20.5);       // double 
echo "<BR>";

echo 10 - 20;       // -10 
echo "<BR>";
echo gettype(10 - 20);      // integer 
echo "<BR>";

echo 9.5 - 20.5;        // -11 
echo "<BR>";
echo gettype(9.5 - 20.5);       // double 
echo "<BR>";

echo 10 * 20;       // 200 
echo "<BR>";
echo gettype(10 * 20);      // integer 
echo "<BR>";

echo 9.5 * 20.5;        // 194.75 
echo "<BR>";
echo gettype(9.5 * 20.5);       // double 
echo "<BR>";

echo 20 / 10;       // 2 
echo "<BR>";
echo gettype(20 / 10);      // integer 
echo "<BR>";

/* == Note That == */
echo 20 / 8;       // 2.5 
echo "<BR>";
echo gettype(20 / 8);      // double 
echo "<BR>";

echo 20 % 8;       // 4
echo "<BR>";
echo 20 % 5;       // 0
echo "<BR>";

echo 2**4;       // 16
echo "<BR>";
echo 2**3;       // 8
echo "<BR>";

// identity
// convert the string to integer 
// only used with the numbers on the string "100", '-200', '10.25'
// can't used to the string as follow => "100 type"     this is error
echo "1";       // 1
echo "<BR>";
echo gettype("1");      // string 
echo "<BR>";

echo +"1";       // 1
echo "<BR>";
echo gettype(+"1");      // integer 
echo "<BR>";

// negation 
// convert the type of the value [positive, negative]
echo "-100";       // -100
echo "<BR>";
echo gettype("-100");      // string 
echo "<BR>";

echo -"-100";       // -100
echo "<BR>";
echo gettype(-"-100");      // integer 
echo "<BR>";