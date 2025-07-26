<?php
/*
	===================================================
	== 007 type juggling & automatic type conversion ==
	===================================================
	- the automatic conversion is belongs to the "returned data"

*/
		echo 1 + "2";		// 3
		echo "<br>";
		echo gettype(1+"2");		// integer
		echo "<br>";

		echo 10 + '5 lessons';		// warning + 15
		echo "<br>";
		echo gettype(10 + '5 lessons');		// warning + integer
		echo "<br>";

		echo true ;
		echo "<br>";
		echo gettype(true + true);		// integer
		echo "<br>";
		echo true + true ;	// 2
		echo "<br>";

		echo 10 + 15.5;		// 25.5
		echo "<br>";
		echo gettype(10 + 15.5);		// double | float
		echo "<br>";
?>
