<?php

/*
    =============================
    == 010 string and escaping ==
    =============================
	nl2br()		// this make line break 
*/

	echo "hello world";		// hello world
	echo "<br>";

	echo "hello \'world\'";		// hello \'world\'
	echo "<br>";

	echo "hello \"world\"";		// hello "world"
	echo "<br>";

	echo "\\hello world\\";		// \hello world\
	echo "<br>";

	// make multiple lines using nl2br() method
	echo nl2br('hello
	this is multiple 
	lines using nl2br() method');
	echo "<br>";
?>
