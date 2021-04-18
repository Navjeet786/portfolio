<?php

include "dbcon.php";

$id = $_POST['id'];

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['subject'];
$d = $_POST['message'];


$data = "UPDATE resume set name='$a',email='$b',subject='$c',message='$d' where id=$id";
mysqli_query($con,$data);








?>