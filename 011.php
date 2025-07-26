<?php

/*
    ============================
    == 011 Heredoc and Nowdoc ==
    ============================
*/

$name = 'Osama';

	/*
		make triple brackets <<<, then name it 
		the double qoutes is optional 
		in Heredoc we make Parsing 
		the variables can be defined in the Heredoc
	*/
	echo <<< "Here"
	hello PHP 
	Special characters \\\\\\\\ ''' 
	Hello My Name Is $name 
	Here;
	echo "<br>";

	/*
		using single qoute to define Nowdoc
		the varibales can not be defined 
		the parsing can't be work
	*/
	echo <<< 'Now'
	hello PHP 
	Special characters \\\\\\\\ ''' 
	Hello My Name Is $name 
	Now;
	echo "<br>";
?>
