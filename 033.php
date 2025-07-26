<?php
/*
    =============================================
    == 033 if, elseif, else alternative syntax ==
    =============================================
*/

$num = 10;

if($num %2 == 0){
    echo "even number";     // even number 
    echo "<br>";
}else{
    echo "odd number";
    echo "<br>";
}

// if has one line in the block of code 
// if has only one statement in the block of code 
// if has only if statement can use more than one statement at the same line 
if (10 >5) echo "10 bigger than 5"; echo " "; echo "good";      // 10 bigger than 5 good
echo "<br>";

// if has only one statement in the block of code 
if (100 >50) echo "good";       // good
else echo "bad";
echo "<br>";


// another form to the code 
$index = 11;
if ($index %2 == 0)
    echo "even number";
else
    echo "odd number";      // odd number
?>

<!-- alternative syntax of if statement -->
<?php  if (10 > 5): ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>hello world</p>
    </body>
</html>

<!-- this means that the end of if statement -->
<?php endif;    ?>


<!-- alternative syntax of if statement -->
<?php

if (10 >5):
    echo "first";
elseif (10 > 11):
    echo "second";
else:
    echo "last";
endif;

?>