<?php
/*
    ==================
    == 039 for loop ==
    ==================

    for (condition){
        block of code
    }

*/

// using for loop to print line number 1 to line number 10
for ($i=1; $i<=10; $i++){
    echo "Line Number {$i}";
    echo "<br>";
}

echo "<hr>";

// using for loop to print line number 10 to line number 1
for ($start = 10; $start >= 1; $start --){
    echo "Line Number {$start}";
    echo "<br>";
}

echo "<hr>";

// short hand of for loop 
// using for loop print 0 to 10 
for ($start = 0; $start <= 10; $start ++):
    echo $start;
    echo "<br>";
endfor;