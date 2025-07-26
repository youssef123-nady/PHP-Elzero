<?php
/*
    ===============================
    == 048 function unpacking arguments == 
    ===============================
*/

function get_data($name, $country = 'Private', ...$skills){
    echo "Hello {$name} Your Country Is: {$country}" . "<br>";
    
    foreach ($skills as $skill):
        echo "- $skill" . "<br>";
    endforeach;
}

get_data("Osama", "Egypt", "HTML", "CSS", "JS");
echo "<hr>";
// usually use triple dots to unpacking an array of elements
$group_of_skills = ["HTML", "CSS", "JS", "PHP", "MySQL", "Laravel"];
get_data("Ahmed", "USA", ...$group_of_skills);
echo "<hr>";
