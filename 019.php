<?php
/*
    ========================================
    == 019 pre-defined and magic constant ==
    ========================================
    pre-defined constants [case sensitive]
    ----------------------------------------
    - PHP_VERSION
    - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH 

    magic constants
    ------------------
    - __LINE__
    - __FILE__
    - __DIR__

    reserved keywords
    -------------------
    - break
    clone

    search
    ----------
    - PHP predefined constants
    compile time, runtime
    - list of reserved keywords
*/

// get the version of the php 
echo PHP_VERSION;       // 8.2.12
echo "<br>";

// get the type of the operating system 
echo PHP_OS_FAMILY;     // Windows 
echo "<br>";

echo PHP_INT_MAX;       // 9223372036854775807
echo "<br>";

echo DEFAULT_INCLUDE_PATH;      // .;C:\php\pear
echo "<br>";

echo php_uname();       // Windows NT DESKTOP-NLSBL53 10.0 build 19045 (Windows 10) AMD64
echo "<br>";

// get the line number 
echo __LINE__;      // 49 
echo "<br>";

// get the path of the file on the device
echo __FILE__;      // C:\xampp\htdocs\PHP\index.php
echo "<br>";

// get the directory that the file is exist 
echo __DIR__;       // C:\xampp\htdocs\PHP
echo "<br>";