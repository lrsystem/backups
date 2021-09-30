<?php
session_start();

$con = mysqli_connect('localhost' , 'root' , '' );

mysqli_select_db($con , 'website');

$name = $_POST['user'];
$som = $_SESSION['username'];

$s = " SELECT * from  storage where name = '$som' && emailgoogle = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("location: settings.php?exists1");
}else{
    $reg = "UPDATE storage set emailgoogle = '$name' where name = '$som'";
    mysqli_query($con, $reg);
header("location: settings.php?done2");
}
?>