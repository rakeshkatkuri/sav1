<?php
include 'db_control.php';

$title =  $_POST['title'];
$des =  $_POST['des'];

//$time = (new \DateTime())->format('Y-m-d H:i:s'); 
$sql = "insert into `news_raw`(`title`,`description`,`source`) VALUES ('$title','$des','bloomberg')";

//INSERT INTO `news_raw`(`id`, `title`, `description`, `source`, `timestamp`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])


mysqli_query($con,$sql);

mysqli_close($con);

//connect to mysql database
$conn = mysqli_connect('127.0.0.1','root','');
//saenergyct database is added
mysqli_select_db($conn,'sgtk');
//use mysqli_close(); to close connection always
//use require 'db_control.php'; in code to access this file.
$sql1 = "insert into `news`(`headline`,`content`) VALUES ('$title','$des')";
mysqli_query($conn,$sql1);
header('location:../news_raw.php');
mysqli_close($conn)

?>