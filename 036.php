<?php
/*
    ================
    == 036 switch ==
    ================
    
    switch syntax
    -----------------
    switch (expression){
        case 1:
            block of code 
            break;
        case 2:
            block of code 
            break;
        case 3:
            block of code 
            break;
        default:
            default block of code
    }
*/

$day = "Sat";
switch ($day){
    case "Sat":
        echo "hello today is: $day we are open from 10:16";
        break;
    case "Sun":
        echo "hello today is: $day we are open from 11:16";
        break;
    case "Mon":
        echo "hello today is: $day we are open from 12:16";
        break;
    default:
        echo "unknown day";
}