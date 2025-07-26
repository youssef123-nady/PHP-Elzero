<?php
/*
    =======================
    == 038 do while loop ==
    =======================
    - do while print the code at least once if the condition false 
    - while do not print anything if the condition false 
    - do while execute the code then check the condition 

    do while loop condition 
    ----------------------------
    do{
        block of code 
    }while (condition);

*/

// use do while loop to print 1 to 10
$start = 1;

do{
    echo $start;
    echo "<br>";
    $start ++;
} while($start <= 10);
echo "<hr>";

// use do while loop to print 10 to 1
$index = 10;
do {
    echo $index;
    echo "<br>";
    $index --;
} while ($index >= 1);
echo "<hr>";