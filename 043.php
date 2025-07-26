<?php
/*
    =======================================
    == 043 function introduction and DRY ==
    =======================================
    - parameter 
    - argument 
*/

echo "Hello Osama" . "<br>";
echo "Hello Ahmed" . "<br>";
echo "Hello Sayed" . "<br>";

/*
    function say_hello($name)
    ---------------------------------
    function: define the function 
    say_hello(): function name 
    $name: parameter 
    
    say_hello("Ahmed");
    ------------------------
    this called function call 
    Ahmed: called argument 
*/
function say_hello($name){
    echo "Hello $name";
    echo '<br>';
}

// function call 
say_hello("Ahmed");