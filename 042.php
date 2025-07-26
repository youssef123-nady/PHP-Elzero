<?php
/*
    ===========================
    == 042 include & require ==
    ===========================

    include()
    --------------
    - used to get file content in other file
    - if the file is not exist the script will still running 
    - can use it to include more than one file 
    
    require()
    --------------
    - used to get file content in other file
    - if the file is not exist the script will stop running 
    - can use it to include more than one file 
    
    include_once()
    -----------------
    - used to get file content in other file
    - if the file is not exist the script will still running 
    - can use it to include one file only

    require_once()
    ---------------
    - used to get file content in other file
    - if the file is not exist the script will stop running 
    - can use it to include one file 
    
    */
    
    /*
    make test.php file 
    this file include the following variables [$name, $age]
    */
    include("test.php");        
    
    echo $name . "<br>";
    echo $age . "<br>";