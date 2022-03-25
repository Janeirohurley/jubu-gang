<?php
session_start();
include("connection.php");
include("fonctions.php");
$user_data=check_login($con); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jubu gang</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>this is the index page</h1>
    <br>
    hello,<H1><?php echo $user_data['user_name']; ?>.</H1>
</body>
</html>