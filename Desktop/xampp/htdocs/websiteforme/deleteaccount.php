<?php
session_start();

$con = mysqli_connect('localhost' , 'root' , '' );

mysqli_select_db($con , 'website');

$som = $_SESSION['username'];

$s = " SELECT * from  storage where name = '$som'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
$some = "DELETE from storage where name = '$som'";

mysqli_query($con, $some);
session_destroy();
header("location: index.php?del");

}else{
header("location : index.php?err");}
?>