<?php
/*
    ==========================
    == 041 break, countinue ==
    ==========================

    break
    -------
    - used to stop the loop (for, foreach, while, do-while, switch)

    countinue
    ------------
    - used to skip current iteration 
*/

// using alternate syntax
// print all values that exist on the array using foreach 
$numbers = [1, 2, 3, 4 ,5 ,6, 7, 8, 9];
foreach ($numbers as $num){
    // if the number 5 is exist stop the loop 
    // print 1 to 5, print the 5
    if ($num == 5){
        break;
    }
    echo $num . "<br>";
}

echo "<hr>";

$countries = ["EG", "SY", "USA", "SA"];

foreach ($countries as $country){
    // skip USA while print values of the array 
    if ($country == "USA"){
        continue;
    }
    echo $country;
    echo "<br>";
}
