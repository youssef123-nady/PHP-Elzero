<?php
/*
    ===========================================
    == 053 string access and update elements == 
    ===========================================
    - string is an array of characters 
    - access elements by index "zero-based indexing"
    - negative index are allowed

    update elements 
    - update current elements 
    - add new elements 
*/

$str = "Elzero";

// access the string 
echo "first letter is: $str[0]" . "<br>";       // first letter is: E
echo "second letter is: $str[1]" . "<br>";      // second letter is: l
echo "last letter is: $str[-1]" . "<br>";       // last letter is: o

// get the length of the string by using "strlen()" method 
echo strlen($str);      // 6
echo "<br>";

/* Note That: the length of the string is bigger than the index as one */
// get the length of the string 
echo strlen($str) . "<br>";        // 6

// get the last index of the string 
echo $str[strlen($str)-1] . "<br>";      // o

/*
    =======================
    === update elements === 
    =======================
*/ 
echo $str . "<br>";     // Elzero
$str[0] = "A";          // update index 0
echo $str . "<br>";     // Alzero

$str[-1] = 'X'; 
echo $str . "<br>";     // AlzerX

// if the index that will update not exist, will insert that index to the string 
$str[6] = "X";
echo $str . "<br>";     // AlzerXX
