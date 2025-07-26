<?php
/*
    ==========================
    == 026 string operators ==
    ==========================
    - concatentate strings
*/

$a = "Elzero";
$b = "Web";
$c = "School";

echo "$a $b $c";        // Elzero Web School
echo "<br>";

echo "{$a} {$b} {$c}";      // Elzero Web School
echo "<br>";

// the following concatenation does not include any space
echo $a . $b . $c;      // ElzeroWebSchool
echo "<br>";

// make space between variables while concatenation 
echo $a . " " .  $b .  " " . $c;      // Elzero Web School
echo "<br>";

// make constant variable
define("ELZERO", "1");
echo "{$a} {$b} {$c} " . ELZERO;        // Elzero Web School 1
echo "<br>";

// make concatenation between string using dot [.]
$x = " Osama ";
$x .= " Mohamed ";

echo "$x";      // Osama Mohamed