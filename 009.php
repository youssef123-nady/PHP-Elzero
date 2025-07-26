<?php

/*
    ===========================================
    == 009 boolean and converting to boolean ==
    ===========================================
    type casting
    ----------------
    - var_dump()		// used to dump information about the data that given
	- any empty data is "false"

*/

    var_dump((bool) "");		// false
    echo "<br>";

    var_dump((bool)[]);		// false
    echo "<br>";

    var_dump((bool) array());	// false
    echo "<br>";

    var_dump((bool) 0);		// falsee 
    echo "<br>";

    var_dump((bool) ['osama']);		// true
    echo "<br>";

    var_dump((bool) 10);		// true
    echo "<br>";

    var_dump((bool) "hello");	// true
    echo "<br>";

    var_dump((bool) -100);		// true
    echo "<br>";

    var_dump((bool) " ");		// true
    echo "<br>";
?>
