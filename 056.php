<?php
/*
    =================================
    == 056 string functions part 3 == 
    =================================
*/

/*
    chunk_split(string, num_of_pieces, char_type)
    cut the string in to substring/pieces
    also can determine the number of pieces
    the defaukt length of characters that exist on piece is 76
    and the default character at the end of each piece is space 
*/ 
echo chunk_split("Elzero Web School", 3, '-');  // Elz-ero- We-b S-cho-ol-
echo "<br>";

/*
strlen()
get the number of characters that exist on the string
*/ 
echo strlen("osama");        // 5
echo "<br>";

/*
str_split()
used to convert the string into an array of elements
also can determine the length of each element 
*/ 
// each characters will be one element if not determine length
echo "<pre>";
print_r(str_split("Elzero Web School"));
echo "</pre>";

// each element of array has 2 characters 
echo "<pre>";
print_r(str_split("Elzero Web School", 2));
echo "</pre>";

/*
    strip_tags()
    can make strip to HTML tags from the string
    allow specific tags to appear
*/ 
echo "<h3> <em> hello world </em> </h3>";       
echo "<br>";

// all tag will be written will make strip to it 
echo strip_tags("<h3> <em> hello world </em> </h3>");  
echo "<br>";

// also can allow specific tag to printed "<h3>" will printed 
echo strip_tags("<h3> <em> hello world </em> </h3>", "<h3>");  
echo "<br>";


/*
    nl2br()
    make <br> against all \n on the string 
    and the default to second argument is make self-closing tag to each <br>
*/ 
echo nl2br("elzero\n web \n school");
echo "<br>";

// do not make self-closing tag to each <br>
echo nl2br("elzero\n web \n school", false);