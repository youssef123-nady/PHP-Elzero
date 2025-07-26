<?php
/*
    ====================================
    == 035 ternary condition operator ==
    ====================================
*/

$num = 10;

if ($num %2 == 0){
    echo "even number";
}else{
    echo "odd number";
}

echo "<br>";

/* 
    ternery operator syntax
    condition ? true : false ;
*/
echo $num %2 == 0 ? "even number" : "odd number" ;