<?php
session_start();

$con = mysqli_connect('localhost' , 'root' , '' );
$zz = "select  emailgoogle from storage";
mysqli_select_db($con , 'website');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from  storage where name = '$name' && password = '$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    
    $_SESSION['username'] = $name;
    $_SESSION['password'] = $pass;
    header("location: welcome.php?login");
}else{

header("location: usernotexists.php");}
?>