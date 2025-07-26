<?php
/*
    =================================
    == 057 string functions part 4 == 
    =================================
*/

    /*
        strpos(string, value, start_posiiton)
        search about value in a string 
        this return the position of the value 
        return the first value that exists 
    */
    $name = 'osama mohamed';
    var_dump(strpos($name, "os"));      // int(0) 
    echo "<br>";

    var_dump(strpos($name, "h"));      // int(8) 
    echo "<br>";

    /*
    strrpos()
    this means string right position 
    this get the last value that get
    */ 
    var_dump(strrpos($name, "a"));      // int(9) 
    echo "<br>";

    /*
        strripos()
        this means string right insensitive position 
    */ 
    var_dump(strripos($name, "a"));      // int(9) 
    echo "<br>";

    var_dump(strripos($name, "A"));      // int(9) 
    echo "<br>";

    var_dump(strripos($name, "OSAMA"));      // int(0) 
    echo "<br>";

    /*
        substr_count(string, value, start, end)
        determine the count of the value in the string 
    */ 
    var_dump(substr_count($name, "o"));      // int(2) 
    echo "<br>";

    var_dump(substr_count($name, "a"));      // int(3) 
    echo "<br>";

    var_dump(substr_count("hello hello", "he", 1));      // int(1) 
    echo "<br>";

    var_dump(substr_count("hello hello", "e", 1, 7));      // int(2) 
    echo "<br>";