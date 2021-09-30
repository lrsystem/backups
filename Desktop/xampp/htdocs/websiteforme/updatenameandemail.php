<?php
session_start();

$con = mysqli_connect('localhost' , 'root' , '' );
$zz = "select  emailgoogle from storage";
mysqli_select_db($con , 'website');
$name = $_POST['user'];
$som =  $_SESSION['username'];

$s = " select * from  storage where name = '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);    

if($num == 1){
header("location: settings.php?exists");
}else{  
    unset($_SESSION['username']);
    $_SESSION['username'] = $name;  

    $reg = "UPDATE storage set name = '$name' where name = '$som'";
    mysqli_query($con, $reg,);
    header("location: settings.php?done");
}
?>