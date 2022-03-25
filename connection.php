<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_from_janeiro";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to cannect!");
}
?>