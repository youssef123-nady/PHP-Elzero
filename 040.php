<?php
/*
    ======================
    == 040 loop foreach ==
    ======================
    -------------
    -- foreach --
    -------------
    - print the values of the array 
    - print the key with the value 

*/

$countris = ['EG', "SA", "SY"];
echo "<pre>";
print_r($countris);
echo "</pre>";

echo "<hr>";

$countris_with_discount = ['EG' => 50, "SA" => 30 , "SY" => 22];

echo "<pre>";
print_r($countris_with_discount);
echo "</pre>";

echo "<hr>";


// print the values of the array 
foreach($countris as $country){
    echo $country . "<br>"; 
}

echo "<hr>";

// print the key with the value 
foreach ($countris_with_discount as $country => $discount){
    echo "Country Name Is: $country, and Discount Is: $discount" . "<br>";
}

echo "<hr>";

// also can use the alternate syntax 
foreach ($countris_with_discount as $country => $discount):
    echo "Country \"$country\" Has The Following Discount \"$discount\"";
    echo "<br>";
endforeach;
