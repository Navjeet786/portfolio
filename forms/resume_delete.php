<?php

include "dbcon.php";
$id = $_GET['id'];
$a = "DELETE from resume where id=$id";
$query = mysqli_query($con,$a);
header('location:resume_display.php');
?>