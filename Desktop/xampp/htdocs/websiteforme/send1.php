<?php
session_start();

$con = mysqli_connect('localhost' , 'root' , '' );

mysqli_select_db($con , 'website');

$name = $_POST['username'];
$ph = $_POST['phone'];
$emailss = $_POST['youreamil'];
$msg = $_POST['msg'];
$reg = "Insert into contacts(username, emailid, phone, msg) values ('$name' , '$emailss' , '$ph', '$msg') ";
mysqli_query($con, $reg);
header("location: contact.php?sent");?>
