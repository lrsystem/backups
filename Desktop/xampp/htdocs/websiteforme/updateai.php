<?php
session_start();

$con = mysqli_connect('localhost' , 'root' , '' );

mysqli_select_db($con , 'website');

$name = $_POST['currentpas'];
$newpass = $_POST['newpass'];
$som = $_SESSION['username'];

$s = " SELECT * from  storage where name = '$som' && password = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    $reg = "UPDATE storage set password = '$newpass' where name = '$som'";
    mysqli_query($con, $reg);
header("location: settings.php?done3");
}else{
    header("location: settings.php?err");

}
?>

