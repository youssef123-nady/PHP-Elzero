<?php
/*
    ==================================
    == 031 if, elseif, else example ==
    ==================================
*/
$page = "About";

// search about main page in the site 
if ($page == "About"){
    echo "this is the page";
}
echo "<br>";

// search about main page in the site 
$title = 'Home';
if ($title == ""){
    echo "Unknown Page";
}else{
    echo $title;
}
echo "<br>";