<?php
//connect to mysql database
$con = mysqli_connect('127.0.0.1','root','');
//saenergyct database is added
mysqli_select_db($con,'');
//use mysqli_close(); to close connection always
//use require 'db_control.php'; in code to access this file.
?>