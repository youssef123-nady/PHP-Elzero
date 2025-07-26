<?php
/*
    ==========================================
    == 034 nested if and advanced trainings ==
    ==========================================
*/

$name = "Osama";
$is_student = true;
$is_orphan = true;
$country = 'Egypt';
$country_discount = 50;
$price = 200;
$student_discount = 10;
$orphan_discount = 25;

// check the country of the person 
if ($country == "Egypt"){
    
    // check if the person is student or not
    if ($is_student == true){

        // check if the student is orpahn or not 
        if ($is_orphan == true){
            echo "Hello $name";
            echo "<br>";
            echo "Country Discount: $country_discount";
            echo "<br>";
            echo "Student Discount: $student_discount";
            echo "<br>";
            echo "Orphan Discount: $orphan_discount";
            echo "<br>";
            echo "the total price is: $price";
            echo "<br>";
            echo "the final discount is: ". $price -$student_discount - $country_discount - $orphan_discount;

        // if the student is not orphan 
        }else{
            echo "Hello $name";
            echo "<br>";
            echo "Country Discount: $country_discount";
            echo "<br>";
            echo "Student Discount: $student_discount";
            echo "<br>";
            echo "the total price is: $price";
            echo "<br>";
            echo "the final discount is: ". $price -$student_discount - $country_discount;
        }

    // in case if the person is not student 
    }else{
        echo "Hello $name";
        echo "<br>";
        echo "Country Discount: $country_discount";
        echo "<br>";
        echo "the total price is: $price";
        echo "<br>";
        echo "the final price is: " . $price - $country_discount;
    }

    // in case of if the person is not belongs to egypt 
}else{
    echo "Hello $name";
    echo "<br>";
    echo "No Discount";
    echo "<br>";
    echo "the final price is: $price";
}
