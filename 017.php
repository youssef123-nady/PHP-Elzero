<?php
/*
    =======================================
    == 017 predefined variables and test ==
    =======================================
    - are variable built-in the language 
*/

echo "<pre>";
// get info about the server 
print_r($_SERVER);
echo "</pre>";

echo "<pre>";
    print_r($_SERVER["HTTP_CONNECTION"]);       // keep-alive
    echo "</pre>";
    echo $_GET["username"];     // show data that written on the text field bellow in HTML 
?>

<!-- 
    get: show data on the URL 
    post: hide the data from the URL 
-->
<form action="" method="get">
    <input type="text" name='username'>
    <input type="submit" value="Send">
</form>