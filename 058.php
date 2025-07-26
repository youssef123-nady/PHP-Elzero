<?php

/*
    =================================
    == 058 string functions part 5 == 
    =================================
	Note That: data that exist on the URL called query string 
*/

	/*
	parse_str(query_string, array_name)
		used to store that query string on an array, also can access the array elements 
	*/ 

	parse_str("name=osama&email=osama@nn.sa&os=windows", $query);
	echo "<pre>";
	print_r($query);
	echo "</pre>";

	// also can print any index on the array 
	echo $query["name"] . "<br>";			// osama
	echo $query["email"] . "<br>";			// osama@nn.sa
	echo $query["os"] . "<br>";				// windows 

	/*
	quotemeta()
		used to escape any charachter that make error for protection 
		usually special characters 
	*/
	echo quotemeta("hello [] / $ % ^ &") . "<br>";		// hello \[\] / \$ % \^ &
	echo "hello [] / $ % ^ &" . "<br>";					// hello [] / $ % ^ &

	/*
	str_pad(string, length, character, flag)
		used to fill the string with specific length 
		the default character is white space 
		flag is optional and can be as follow:
			- STR_PAD_BOTH
			- STR_PAD_LEFT
			- STR_PAD_RIGHT
	*/
	echo str_pad("123", 6, '0') . "<br>";		// 123000
	echo str_pad("163", 6, '0') . "<br>";		// 163000
	echo str_pad("168", 6, '0') . "<br>";		// 168000

	// test the flag 
	echo str_pad("168", 6, '0', STR_PAD_BOTH) . "<br>";		// 016800
	echo str_pad("168", 6, '0', STR_PAD_LEFT) . "<br>";		// 000168
	echo str_pad("168", 6, '0', STR_PAD_RIGHT) . "<br>";	// 168000

	/*
	strtr(string, old_char, new_char)
		used to translate the string 
		get the old character then chage it to new character 
	strtr(string, array)
	*/
	echo strtr("Osama", 'oa', "OS") . "<br>";		// OsSmS
	echo strtr("Os#m#", '#', "a") . "<br>";			// Osama

	$translation = ["@" => "", "#" => "m"];
	$name = "Os@#@ Moh@#ed";
	echo strtr($name, $translation);		// Osm Mohmed