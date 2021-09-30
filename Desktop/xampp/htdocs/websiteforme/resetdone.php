
<?php
include 'nav.php';
?>

<div class="alert alert-warning alert-dismissible fade show my-3 mx-5 rounded" role="alert">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-0 mb-1 bi bi-check2-circle" viewBox="0 0 16 16">
  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
</svg><strong> Sucess:</strong> The Password Has Been Reset! 
<a class="mylink"  onclick="openlogin()"  data-bs-placement="bottom" data-bs-toggle="tooltip"  title="Login WIth New Password"><strong> Click Here To Login</strong></a><span>.</span>
  <button type="button" class="btn-close " data-bs-dismiss="alert"  data-bs-placement="bottom" data-bs-toggle="tooltip"  title="Close" aria-label="Close"></button>
</div>

<?php
include 'body.php'
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<SCRipt>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</SCRipt>