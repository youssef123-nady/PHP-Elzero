<?php
/*
    =================================
    == 030 if, elseif, else basics ==
    =================================

    syntax
    if(condition){
        block of code
    }
*/

if (10 > 5){
    echo "first condition";
}elseif (10 > 6){
    echo "second condition";
}
else{
    echo "No";
}
echo "<br>";


$num = 110;
if ($num %2 == 0){
    echo "this number is even";
}else{
    echo "this number is odd";
}