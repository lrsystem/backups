
<?php
include 'nav.php'?>

<div class="alert alert-warning alert-dismissible fade show my-3 mx-5 rounded" role="alert">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-0 mb-1 bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
</svg><strong> Sucess:</strong> Account Has Been Succesfully Created<span id="withme">! <a class="mylink" style="display:none;" data-bs-placement="bottom" data-bs-toggle="tooltip"   onclick="location.href='welcome.php'" title="Continue With The Recent Session"><strong>Click Here To Continue With The Recent Session</strong>.</a></span>
<a class="mylink" id="withlogin" onclick="openlogin()" data-bs-placement="bottom" data-bs-toggle="tooltip"   title="Login WIth New Username"><strong> Click Here To Login?</strong></a>
  <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"  data-bs-placement="bottom" data-bs-toggle="tooltip"  title="Close"></button>
</div>


<?php
include 'body.php'
?>

</body>
</html>