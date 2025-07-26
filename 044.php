<?php
/*
    ===========================
    == 044 function examples ==
    ===========================
    - parameter 
    - argument 
*/

function say_hello($one){
    echo "Hello {$one}" . "<br>";
}

// function call    
say_hello("Osama");     // Hello Osama
say_hello("Ahmed");     // Hello Ahmed

// make function that check the type of the number is even or is odd 
function check_even_or_odd($number) {

    if (is_int($number)) { // Check if the number is an integer
        if ($number % 2 == 0) {
            echo "Even Number" . "<br>";
        } else {
            echo "Odd Number" . "<br>";
        }
    } else {    // if the number is string print the following message
        echo "Only Numbers Allowed";
    }
}

// function call
check_even_or_odd(10); // this number is even
check_even_or_odd(11); // this number is odd