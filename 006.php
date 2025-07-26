<?php
/*
	====================================
	== 006 introduction to data types ==
	====================================
	- bool => Boolean
	- int => integer
	- float => floating point number | double
	- string
	- array
	- other types
	- gettype()		// this used to get the type of the data
*/

		echo gettype('hello world');		// string
		echo "<br>";

		echo gettype("hello world");		// string
		echo "<br>";

		echo gettype(120);		// int
		echo "<br>";

		echo gettype(-190);		// int
		echo "<br>";

		echo gettype(true);		// bool
		echo "<br>";

		echo gettype(false);		// bool
		echo "<br>";

		echo gettype(10.251);		// double | float
		echo "<br>";

		echo gettype(array(1, 2, 3));		// array
		echo "<br>";

		echo gettype([1, 2, 3, 4]);		// array
		echo "<br>";

?>
