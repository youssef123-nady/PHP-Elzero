<?php
    /*
    ===========================
    == 015 Variable Variable ==
    ===========================
    - takes the value of the a variables and treats as the name of a variable 
    */

    $a = "Osama";
    echo $a;        // Osama
    echo "<br>";
    
    // the value of the $$a is the value of the $a "Osama"
    // means $$a is equal Osama
    $$a = "ElZero";
    echo $$a;       // ElZero
    echo "<br>";

    // the value of $$$a is equal "ElZero"
    $$$a = "School";
    echo $$$a;      // School
    echo "<br>";
    
    echo "Hello ${a}";     // Hello Osama
    echo "<br>";

    echo "Hello ${$a}";     // Hello ElZero
    echo "<br>";
?>