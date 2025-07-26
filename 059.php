<?php

/*
    =================================
    == 059 string functions part 6 == 
    =================================
*/

	/*
		str_replace(old_value, new_value, string)
		also can take replace_count: this is the number of replacement on the string 
		it is case sensitive

		str_ireplace(old_value, new_value, string)
		also can take replace_count: this is the number of replacement on the string 
		it is case in-sensitive
	*/

	$name = "elzero web school";
	echo str_replace("elzero", "Elzero", $name). '<br>';		// Elzero web school
	
	// test the replace count 
	echo str_replace("o", "X", $name, $count). '<br>';		// Elzero web school
	echo "replaces count are: " . $count . '<br>';	// replaces count are: 3
	
	// also can replace more than element with one element 
	echo str_replace(["o", "e"], "0", "Elzero Web School") . $count . '<br>';	// Elz0r0 W0b Sch00l
	
	// also can replace specific character to other character
	echo str_replace(["o", "e"], ["O", "E"], "Elzero Web School") . '<br>';	// ElzErO WEb SchOOl
	
	// if the new string is not enough will replace the exist, and the end will make it empty
	// two will be empty
	echo "<pre>";
	print_r(str_replace(["one", "two"], [1], ['one', 'two', 'three'])) . '<br>';	// ElzErO WEb SchOOl
	echo "</pre>";
