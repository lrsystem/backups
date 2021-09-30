<?php
session_start();
if(!isset($_SESSION['username'])){
header("location: index.php?err");
}
?>
<?php

$con = mysqli_connect('localhost' , 'root' , '' );

mysqli_select_db($con , 'website');
$field = "emailgoogle";
$co = $_SESSION['username'];
$myem = "SELECT emailgoogle FROM `storage` WHERE `name` = '$co' ";
$result = mysqli_query($con, $myem);
$row = mysqli_fetch_array($result);
$hh =  $row[$field];
?>
<?php
mysqli_select_db($con , 'website');
$fieldd = "password";
$myemd = "SELECT password FROM `storage` WHERE `name` = '$co' ";
$resultd = mysqli_query($con, $myemd);
$rowd = mysqli_fetch_array($resultd);
$pppp =  $rowd[$fieldd];
?>
<?php
include 'nav2.php';
?>
<script src="js/setting.js"></script><div class="alert alert-warning alert-dismissible fade show my-3 mx-5 rounded" id="exist" role="alert" style="display: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-0 mb-1 bi bi-exclamation-triangle" viewBox="0 0 16 16">
    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
    <strong> Error:</strong> Another User Or You Exists With That Same Username.
    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"   data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Close"></button>
  </div><div class="alert alert-warning alert-dismissible fade show my-3 mx-5 rounded" id="xyz" role="alert" style="display: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-0 mb-1 bi bi-exclamation-triangle" viewBox="0 0 16 16">
    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
    <strong> Error:</strong> Another User Or You Exists With That Same Email.
    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"   data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Close"></button>
  </div><div class="alert alert-warning alert-dismissible fade show my-3 mx-5 rounded" id="err" role="alert" style="display: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-0 mb-1 bi bi-exclamation-triangle" viewBox="0 0 16 16">
    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
    <strong> Error:</strong> Current Password Is Invalid.
    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"   data-bs-toggle="tooltip" data-bs-placement="bottom"  title="Close"></button>
  </div>
<div class="alert alert-warning alert-dismissible fade show my-3 mx-5 rounded" id="done" style="display:none;" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-0 mb-1 bi bi-check2-circle" viewBox="0 0 16 16">
    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
  </svg><strong> Sucess:</strong> Username Was Successfully Updated.
    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"  data-bs-toggle="tooltip" data-bs-placement="bottom"title="Close"></button>
</div><div class="alert alert-warning alert-dismissible fade show my-3 mx-5 rounded" id="done2" style="display:none;" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-0 mb-1 bi bi-check2-circle" viewBox="0 0 16 16">
    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
  </svg><strong> Sucess:</strong> Email Was Successfully Updated.
    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"  data-bs-toggle="tooltip" data-bs-placement="bottom"title="Close"></button>
</div><div class="alert alert-warning alert-dismissible fade show my-3 mx-5 rounded" id="done3" style="display:none;" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-0 mb-1 bi bi-check2-circle" viewBox="0 0 16 16">
    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
  </svg><strong> Sucess:</strong> The Password Was Successfully Updated.
    <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"  data-bs-toggle="tooltip" data-bs-placement="bottom"title="Close"></button>
</div>

<div class="container p-5 round shadow-lg  bg-light my-5" style="background-image: url('https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?cs=srgb&dl=pexels-johannes-plenio-1103970.jpg&fm=jpg');
background-size: cover;
background-repeat: no-repeat;
">
<div class="text-center bg-dark text-light p-3 round my-1 md-auto shadow-lg"><h3><strong>Account Settings <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"  fill="white" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" class="MYSVG bi bi-gear my-0 mb-1 mx-1 mydisbaledo" viewBox="0 0 16 16" data-bs-original-title="Account Settings">
  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
</svg> </strong></h3></div>
<div class="mx-3 my-4"> 
  <h4 > <strong>Update Profile:</strong> </h4>
  <div class="my-4 mb-2"><strong>General Settings:</strong></div>
  <form action="updatenameandemail.php" method="post">
  <label for="myname">  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-person-circle my-0 mb-1" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
  </svg>   <span class="mx-1">       Username </span> </label>
  <div class="input-group my-2 mb-3">
    <span class="input-group-text">  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-person-circle my-0 mb-1" viewBox="0 0 16 16">
      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
    </svg> </span>
    <input type="text" aria-label="First name"  maxlength="20" oninput="hi()" name="user" placeholder="Enter A New Name"  id="myname" class="form-control" value="<?php echo $_SESSION['username'];?>" required>
    <input type="text" aria-label="First name" class="form-control" style="opacity: 0; pointer-events: none;">
  </div>
  <div class="form-text mb-3 my-1" style="color: black;">* Your New Username Must Be of 20 Characters or Less.
  </div>

  <button type="submit" class=" btn btn-danger my-2 mb-3" id="btnsave"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update Name"> Update Name <span mx-1></span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-1 bi bi-save my-0 mb-1" viewBox="0 0 16 16">
    <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
  </svg></button>

  <button type="button" class=" btn btn-dark  my-2 mb-3" onclick="form1()"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Clear Input"> Reset <span mx-1></span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser my-0 mb-1" viewBox="0 0 16 16">
    <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
  </svg></button>
</form>  
<form class="my-2" action="updatemail.php" method="post">
<label class="" for="myemail">  <svg xmlns="http://www.w3.org/2000/svg"
  width="20" height="20" fill="currentColor"
  class="bi bi-envelope-open-fill my-0 mb-1" viewBox="0 0 16 16">
  <path
      d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
</svg>   <span class="mx-1">      Mailing Email </span> </label>
  <div class="input-group my-2">
    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg"
      width="16" height="16" fill="currentColor"
      class="bi bi-envelope-open-fill my-0 mb-1" viewBox="0 0 16 16">
      <path
          d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
  </svg></span>
    <input type="email" aria-label="First name" name="user" placeholder="Enter A New Email" value="<?php echo $hh;?>" id="myemail" class="form-control" required>
    <input type="text" aria-label="First name" class="form-control" style="opacity: 0; pointer-events: none;">
  </div>
</div>
<div class="form-text mb-3 my-1 mx-3" style="color: black;">* This Email Will Be Used For Newsletter & For Password Verfication.</div>
<div class="mx-3 my-2 mb-2">
<button type="submit" class=" btn btn-danger"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update Email"> Update Email <span mx-1></span> <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="mx-1 bi bi-save my-0 mb-1" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
</svg></button>

<button type="button" class=" btn btn-dark " onclick="form2()"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Clear Input"> Reset <span mx-1></span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser my-0 mb-1" viewBox="0 0 16 16">
  <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
</svg></button>
</div>
</form>
<script>    var d = document;

  function form1(){

    document.getElementById("myname").value="";

    }
    function form2(){
      document.getElementById("myemail").value="";
    }
</script>
<div class="mx-3">
<div class="my-4 mb-2"><strong>Password Settings:</strong></div>
  <form action="updateai.php" method="post">
  <label for="mypasswordc" style="cursor: default;"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-person-circle my-0 mb-1" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
  </svg>   <span class="mx-1">       Username </span> </label>
  <div class="input-group my-2 mb-3">
    <span class="input-group-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
      height="16" fill="currentColor" class="bi bi-key-fill my-0 mb-1"
      viewBox="0 0 16 16">
      <path
          d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
  </svg> </span>
    <input type="text" aria-label="First name" name="currentpas" placeholder="Enter Current Password"  id="mypasswordc" class="form-control" value="<?php echo $_SESSION['username']?>" disabled>
    <input type="text" aria-label="First name" class="form-control" style="opacity: 0; pointer-events: none;">
  </div><label class="" for="ff">  <svg xmlns="http://www.w3.org/2000/svg" width="20"
  height="20" fill="currentColor" class="bi bi-key-fill my-0 mb-1"
  viewBox="0 0 16 16">
  <path
      d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
</svg>  <span class="mx-1">       Current Password </span> </label>
  <div class="input-group my-2 mb-3">
    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16"
      height="16" fill="currentColor" class="bi bi-key-fill my-0 mb-1"
      viewBox="0 0 16 16">
      <path
          d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
  </svg></span>
    <input type="text" aria-label="First name" name="currentpas" placeholder="Enter Current Password"  id="ff" class="form-control" required>
    <input type="text" aria-label="First name" class="form-control" style="opacity: 0; pointer-events: none;">
  </div>
<label class="" for="p1">  <svg xmlns="http://www.w3.org/2000/svg" width="20"
  height="20" fill="currentColor" class="bi bi-key-fill my-0 mb-1"
  viewBox="0 0 16 16">
  <path
      d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
</svg>  <span class="mx-1">       New Password </span> </label>
  <div class="input-group my-2 mb-3">
    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16"
      height="16" fill="currentColor" class="bi bi-key-fill my-0 mb-1"
      viewBox="0 0 16 16">
      <path
          d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
  </svg></span>
    <input type="text" aria-label="First name" name="newpass" placeholder="Enter A New Password"  id="p1" class="form-control" required>
    <input type="text" aria-label="First name" class="form-control" style="opacity: 0; pointer-events: none;">
  </div>
</div>
<div class="form-text mb-3 my-1 mx-3" style="color: black;">* We'll Never Share Your Passwords With Anyone Else.</div><button type="submit"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update Passwords" class=" btn btn-danger mx-3"> Update Passwords <span mx-1></span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mx-1 bi bi-save my-0 mb-1" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
</svg></button><button type="reset" class=" btn btn-dark " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Clear Inputs"> Reset <span mx-1></span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser my-0 mb-1" viewBox="0 0 16 16">
  <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
</svg></button>
</form>
<div class="my-4 mx-3 mb-0"><strong>Advanced Settings:</strong>

</div>
<div class="my-2 mb-2 mx-3">
  <button class="btn btn-danger btn-lg" onclick="location.href='deleteaccount.php'">Delete Account <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-archive my-0 mb-1" viewBox="0 0 16 16">
    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
  </svg></button>  <button class="btn btn-danger btn-lg mx-2" onclick="location.href='logout.php'">Logout <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power my-0 mb-1" viewBox="0 0 16 16">
    <path d="M7.5 1v7h1V1h-1z"/>
    <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
  </svg></button>
</div>
<div class="my-3 mx-3 text-light">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-info-circle my-0 mb-1" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
  </svg> Operating System: <span id="os"></span>
</div>
</div></div>
<style>
    .mydisbaled {
    fill: gray;
    cursor: default;
    pointer-events: none;
  }
    .mydisbaledo {
    fill: blck;
    cursor: default;
    pointer-events: none;
  }
</style>
<script>
        if (navigator.userAgent.indexOf("Win") != -1){document.getElementById("os").innerHTML =
          "Windows"};
        if (navigator.userAgent.indexOf("Mac") != -1) {document.getElementById("os").innerHTML =
          "Macintosh"};
        if (navigator.userAgent.indexOf("Linux") != -1) {document.getElementById("os").innerHTML =
          "Ubuntu"};
        if (navigator.userAgent.indexOf("Android") != -1) {document.getElementById("os").innerHTML =
          "Android"};
        if (navigator.userAgent.indexOf("like Mac") != -1) {document.getElementById("os").innerHTML =
          "IOS"};</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<SCRipt>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</SCRipt>
<div style="display:block;">
  <div class="container bg-dark p-3 my-4 text-light round shadow-lg" >
  <div class="text-center text-light">
  
  <h4 class="my-2"><strong>Copyright &copy; <span id="year"></span> <a href="index.php" class="mylinko">Malavika's Magic</a> </strong></h4>
  
  
  </div>
  
  </div>
  </div>
  <script>
    var d = new Date();
  var n = d.getFullYear();
  document.getElementById("year").innerHTML = n;
  </script>
</body>
</html>