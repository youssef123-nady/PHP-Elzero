<?php
/*
    ================================
    == 024 increment or decrement ==
    ================================
    - increase and decrease the values
*/

$likes = 0;
$likes ++;      // increment 
$likes ++;      // increment 
$likes ++;      // increment 
$likes ++;      // increment 

echo $likes;        // 4
echo "<br>";

$likes --;      // decrement  
$likes --;      // decrement  
echo $likes;        // 2
echo "<br>";

/* 
make post increment 
write ++ after the variable 
post increment used to add value after print the value 
means print the value then add to the value 
*/
$index = 0;
echo $index++;  // 0
echo "<br>";

echo $index;        // 1
echo "<br>";

/*
    make pre increment 
    write ++ before the variable 
    add value to the variable then print the value 
*/
$start = 0;
echo ++$start;  // 1
echo "<br>";