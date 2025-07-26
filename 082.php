<?php
	
	/*
		=====================
		== 082 File System ==
		=====================
		- disk_total_space("disk")
		- file_exists("path")
		- filesize("file name")
	*/

	// get the totla space
	print disk_total_space("C:");
	echo "<hr>";

	// check if the file exists or not
	print file_exists("index.php");
	echo "<hr>";

	// get the file size, the size in bits 
	echo filesize("index.php");
	echo "<hr>";