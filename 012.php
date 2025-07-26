<?php
    /*
        ==================================
        == 012 Array With Complex Tests ==
        ==================================
        - array is zero based indexing (the start index is zero)
        - if the index repeated the value of the array will override
        - True: this equal 1
        - False: this equal 0
        - if write index not exist will write it
        - the sorting not making automatically, must sort it manually
        - array element can be nested array or multidimentional array
        - to print the array elements can use the following:
        1- var_dump(): to represent the information about the array (data type)
        2- for loop: to loop for all elements on the array
        3- print_r(): to print human readable about the arrat elements
    */

    echo "<pre>";
    print_r([
        "Sameh",                // this has value, can access it using its index "0"
        "A" => "Ahmed",         // this has key and value
        "B" => "Bassem",        // this has key and value
        "Mahmoud",              // this has value, can access it using its index "1"
        "Mona",                 // this has value, can access it using its index "2"
        "Amira",                // this has value, can access it using its index "3"
        8 => "Ali",
        "6" => "Amir",
        // this called nested array or multidimentional array
        "Names" => [
            "Ali",
            "Khaled",
            "Mona",
            "Ahmed"
        ],
    ]);
    echo "</pre>";
?>
