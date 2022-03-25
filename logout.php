<?php
session_start();
session_destroy();
#after destroy all session then redirect to login
header("location:login.php");
?>