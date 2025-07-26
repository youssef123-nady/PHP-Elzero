<?php
/*
    =================================
    == 055 string functions part 2 == 
    =================================
*/

/*
    implode()
    join all array elements in a single element
    also can determine the separator between elements
*/

$friends = ['Ahmed', "Mohamed", "Osama"];
echo implode(" ", $friends) . "<br>";       // Ahmed Mohamed Osama
echo implode(", ", $friends) . "<br>";      // Ahmed, Mohamed, Osama
echo implode( $friends) . "<br>";           // AhmedMohamedOsama

/*
    explode()
    take string then return the string in an array 
    Note That: Separator is very important. it used to separate the string into array 
*/
$str = "Elzero Web School";
print_r(explode(' ', $str));        // Array ( [0] => Elzero [1] => Web [2] => School ) 
echo "<br>";

print_r(explode('o', $str));        // Array ( [0] => Elzer [1] => Web Sch [2] => [3] => l ) 
echo "<br>";


/*
also can write the limit, which is the number of elements that will returned 
if write 0, or 1 will return the string as one element
*/
print_r(explode(' ', $str, 0));     // Array ( [0] => Elzero Web School ) 
echo "<br>";    
print_r(explode(' ', $str, 1));     // Array ( [0] => Elzero Web School ) 
echo "<br>";
print_r(explode(' ', $str, 2));     // Array ( [0] => Elzero [1] => Web School ) 
echo "<br>";
print_r(explode(' ', $str, 3));     // Array ( [0] => Elzero [1] => Web [2] => School ) 
echo "<br>";

// remove the last element
print_r(explode(' ', $str, -1));     // Array ( [0] => Elzero [1] => Web )
echo "<br>";

// remove the last 2 elements
print_r(explode(' ', $str, -2));     // Array ( [0] => Elzero ) 
echo "<br>";


/*
    str_shuffle()
    random the characters of the string 
    random the string when reload "refresh", when run the code 
*/
echo str_shuffle("Elzero") . "<br>";     // Ezrleo
echo str_shuffle("Elzero") . "<br>";     // zErelo

/*
    strrev()
    reverse the string 
    make the first letter is last letter, second letter is 2's last letter, ... 
*/
echo strrev("osama");       // amaso
echo "<br>";

/*
    trim()
    remove specific character from the string at the right, left sides

    rtrim()
    remove specific character from the right side

    ltrim()
    remove specific characters from the left side 
*/
echo strlen("   elzero   ") . "<br>";        // 12
echo strlen(trim("  elzero  ")) . "<br>";    // 6