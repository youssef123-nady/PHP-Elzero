<?php
/*
    ===================================
    == 032 if, elseif, else advanced ==
    ===================================
*/
if($_SERVER["REQUEST_METHOD"] === "POST"){
    echo $_POST['username'];
    echo "<br>";
    
    echo $_POST['lang'];
    echo "<br>";
}


if($_POST['lang'] == "ar"){
    // redirect the user based on the input
    header("Location: ar.php");
    
}elseif ($_POST["lang"] == 'en'){
    // redirect the user based on the input
    header("Location: en.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprt</title>
</head>
<body>
    <form action="" method="POST">
        <!-- echo $_POST['username']; -->
        <input type="text" name="username">

        <!-- echo $_POST['lang']; -->
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="es">Spanish</option>
        </select>
        <input type="submit" value="Go">
    </form>
</body>
</html>