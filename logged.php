<?php
require('database.php');


$unname = $_GET['email'];


session_start();
$logg = $_SESSION['login'] = "True";
$uname = $_SESSION['email'] = $unname ;



header('location: user.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>