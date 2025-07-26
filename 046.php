<?php
/*
    ====================================
    == 046 function default parameter == 
    ====================================
    
*/

function get_data($country, $name, $age, $address){
    $line_one = "Your Country Is: $country, and Your Name Is: $name" . "<br>";
    $line_two = "Your Age Is: $age, and Your Address Is: $address" . "<br>";
    return $line_one . $line_two;
}

echo get_data("Egypt", "Youssef", 35, "Giza");

echo "<hr>";

/*
need to make default paramters 
for example make the default parameter is private
    the parameters that have default values should be positioned at the end, not first 
    */ 
    function get_all_data($country = "Private", $name = "Private", $age = "Private", $address = "Private Address"){
        $line_one = "Your Country Is: $country, and Your Name Is: $name" . "<br>";
        $line_two = "Your Age Is: $age, and Your Address Is: $address" . "<br>";
        return $line_one . $line_two;
}

echo get_all_data("Egypt", "Youssef", 35);
echo "<hr>";

// if you need to reach to a specific parameter 
echo get_all_data(name: "Youssef");
echo "<hr>";
echo get_all_data(address: "Cairo");
echo "<hr>";
echo get_all_data(country: "Egypt");
echo "<hr>";