<?php
/*
    =================================
    == 054 string functions part 1 == 
    =================================
    lcfirst(string)
    ucfirst(string)
    strtolower(string)
    strtoupper(string)
    ucwords(string)
    str_repeat(string, counter)
*/

/*
    lcfirst()
    means lower-case first 
    make only first character of the string lower case
*/
echo lcfirst("OSAMA");      // oSAMA
echo "<br>";

/*
    ucfirst()
    means upper-case first 
    make only first character of the string upper case
*/
echo ucfirst("osama");      // Osama
echo "<br>";

/*
    strtolower()
    convert the string to lower case
*/
echo strtolower("OSAMA");        // osama
echo "<br>";

/*
    strtoupper()
    convert the string to upper case
*/
echo strtoupper("osama");       // OSAMA
echo "<br>";

/*
    ucwords()
    make first letter of all words are upper case 
*/
echo ucwords("elzero web school");      // Elzero Web School
echo "<br>";

/*
    str_repeat(string, counter)
    used to repeat the string 
*/
echo str_repeat("Osama", 3);        // OsamaOsamaOsama
echo "<br>";
