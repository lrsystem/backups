<?php
session_start();

$con = mysqli_connect('localhost' , 'root' , '' );

mysqli_select_db($con , 'website');

$name = $_POST['user'];
$pass = $_POST['password'];
$emailss = $_POST['gmail'];

$s = " SELECT * from  storage where name = '$name' && emailgoogle = '$emailss'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("location: userexist.php");
}else{
    $reg = "Insert into storage(name, password, emailgoogle) values ('$name' , '$pass' , '$emailss') ";
    mysqli_query($con, $reg);
header("location: signnupdone.php");

}
?>
