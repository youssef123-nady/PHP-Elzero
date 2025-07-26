<?php

    /*
		===================
		== 008 data type ==
		===================
		type casting
		----------------
      - (int) '5 lessons'		// convert to integer
			- (integer) "5 lessons"		// convert to integer
			- (float) 10		// convert to float
    */

    echo 5 + "5 lessons";   // warning + 10
    echo "<br>";

    echo gettype(5 + "5 lessons");		// warning + integer
    echo "<br>";
		echo gettype(5 + (int) "5 lessons");		// integer
    echo "<br>";
		echo gettype(5 + (integer) "5 lessons");		// integer
		echo "<br>";

		echo 10.5 + 15.5;		// 26
		echo "<br>";
		echo gettype(10.5 + 15.5);		//double
		echo "<br>";
		echo (integer) 10.5 + 10.5;		// 20.5
		echo "<br>";
		echo (integer) (10.5 + 10.5);		// 20
		echo "<br>";
		echo gettype((integer) (10.5+10.5));		// integer
		echo "<br>";

?>
