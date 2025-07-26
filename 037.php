<?php
/*
    ================================
    == 037 while loop and concept ==
    ================================
    
    syntax of while loop 
    --------------------------
    while (condition is true){
        block of code 
        increment or decrement 
    }
*/

// use while loop to print line number 1 to line number 10
$start = 1;
while ($start <= 10){
    echo "line number {$start}";
    echo "<br>";
    $start ++;
}
echo "<hr>";

// use while loop to print line number 10 to line number 1
$index = 10;
while ($index >= 1){
    echo "line number $index";
    echo "<br>";
    $index --;
}
echo "<hr>";

// use while loop to print 1 to 9 no print number 10 
$num = 1;
while ($num < 10):
    echo $num;
    echo "<br>";
    $num ++;
endwhile;