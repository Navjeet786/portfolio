<?php

include "dbcon.php";

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['subject'];
$d = $_POST['message'];

$data = "insert into resume(name,email,subject,message) value ('$a','$b','$c','$d')";
$result = mysqli_query($con,$data);
header('location:../index.php');
 if ($result) {
 	echo "<script> alert('data successfully insert')</script>";

 }else{
 	echo "<script> alert('data not submitted')</script>";
 }

?>