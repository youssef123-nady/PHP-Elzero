<?php

/*
    =================================
    == 060 string functions part 7 == 
    =================================
	substr_replace(old_string, new_string, start_position, length))
		length: refers to the number of characters that will replaced 
*/

	// substr_replace()
	echo substr_replace('one', 1, 0);		// 1
	echo "<br>";

	echo substr_replace('osamaElzero', 0, 5);		// osama0
	echo "<br>";
	
	// if use negative value will start at the end
	echo substr_replace('one', 0, -1);		// on0
	echo "<br>";
	
	/*
		the following example will print "on2"
		will start at the index 2, and replace others with x
	*/
	echo substr_replace('onetwo', "x", 2);		// onx
	echo "<br>";

	/*
	substr_replace(old, new, start, length)
	also can determine the length 
	length: refers to the number of characters that will replaced 
	*/
	// replace only one character
	echo substr_replace('onetwo', 9, 2, 1);		// on9two
	echo "<br>";

	// replace only two characters 
	echo substr_replace('onetwo', 9, 2, 2);		// on9wo
	echo "<br>";

	/*
	Elzero_Web_School: this is the string [old string]
	A: this is the new string that will written on the old string
	7: this is the indes [start position]
	3: this is the length of characters that will be replaced
	*/ 
	echo substr_replace('Elzero_Web_School', "A", 7, 3);		// Elzero_A_School
	echo "<br>";

	// also can insert using substr_replace()
	echo substr_replace('Elzero_Web_School', "#", 1, 0);		// E#lzero_Web_School
	echo "<br>";