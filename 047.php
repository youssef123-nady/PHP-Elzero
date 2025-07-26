<?php
/*
    =============================
    == 047 function variable arguments == 
    =============================
    
*/

function calculate ($num1, $num2){

    // get the number of arguments that the user write in the function call 
    echo "Number of Arguments: " . func_num_args() . "<br>";        // Number of Arguments: 5

    // get specific index of elements
    echo "argument at index 3 is: " . func_get_arg(3) . "<br>";     // argument at index 3 is: 40

    // return array of elements to make operations on it 
    echo "<pre>";
        print_r(func_get_args());
    echo "</pre>";

    // then you can meke any operation after func_get_args()
    $result = 0;
    foreach(func_get_args() as $arg):
        $result += $arg;
    endforeach;
    echo "The Result of Summation of All Elements Are: " . $result . "<br>";     // The Result of Summation of All Elements Are: 150
}
calculate(10, 20, 30, 40, 50);     
// when you did not know the number of arguments 
// the following is called spread syntax [...$num]
function sum_of_num(...$num){
    $result = 0; 
    foreach ($num as $number):
        $result += $number;
    endforeach;

    echo "The Result of Summation of All Elements Are: " . $result . "<br>";        // The Result of Summation of All Elements Are: 15
}
sum_of_num(1, 2, 3, 4, 5);
