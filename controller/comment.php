<?php
include("db_control.php");
$c = $_POST['comment'];
$id =$_GET['id'];   
//echo $c.$id;
$q = "UPDATE `news_final` SET comment = '$c' where id = '$id' ";
mysqli_query($con,$q);


header('location:../news_analyzed.php');



?>