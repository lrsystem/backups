<?php
include 'nav2.php';
?>

<script src="js/cont.js"></script>
<div class="alert alert-warning alert-dismissible fade show my-3 mx-5 rounded" id="sent" style="display:none;" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="my-0 mb-1 bi bi-check2-circle" viewBox="0 0 16 16">
      <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
      <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
    </svg><strong> Sucess:</strong> Contact Form Has Been Succesfully Sent! 
      <button type="button" class="btn-close "   data-bs-placement="bottom" data-bs-toggle="tooltip"  title="Close" data-bs-dismiss="alert" aria-label="Close"></button></div>        
    
<div class="container p-2 bg-light round my-3" style="     background-image: url('https://images.pexels.com/photos/1103970/pexels-photo-1103970.jpeg?cs=srgb&dl=pexels-johannes-plenio-1103970.jpg&fm=jpg');
                background-size: cover;
                background-repeat: no-repeat;">
<div class="my-2 mx-3 text-center bg-dark p-2 text-light round">
    <H3><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-telephone-fill my-0 mb-0" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
  </svg>  Contact</H3>
</div>
<form class="mx-3 my-3" action="send.php" method="post">
<div class="my-3 form-group mx-3">
<div class="form-floating my-3 round">
  <input type="text" class="form-control" name="username" id="floatingInput"  placeholder="Name" required>
  <label for="floatingInput"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-0  mb-1 bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> Enter Your Name</label>
</div>
<div class="form-floating round my-4">
  <input type="email" class="form-control" name="youreamil" id="floatingPassword"  placeholder="Password" required>
  <label for="floatingPassword"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-0 mb-1 bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg> Enter Your Email</label>
</div><div class="form-floating round my-4">
  <input type="number" class="form-control" id="ddd" name="phone" placeholder="Password" required>
  <label for="ddd"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-0 mb-1 bi bi-phone-fill" viewBox="0 0 16 16">
  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
</svg> Enter Your Phone Number</label>
</div>
<div class="form-floating my-4 round">
  <textarea class="form-control" id="msg" name="msg" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 85px;" required></textarea>
  <label for="floatingTextarea2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="my-0 mb-0 bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> Enter Your Message</label>
</div>
<div class="text-center my-3">
<button type="submit" class="btn btn-danger btn-lg mx-1"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Submit" >Submit <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="my-0 mb-1 bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></button><button type="button" onclick="hu()"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Clear Inputs"  class="btn btn-danger btn-lg mx-1">Reset <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="my-0 mb-1 bi bi-eraser my-0 mb-1" viewBox="0 0 16 16">
    <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"></path>
  </svg></button>
  <script>
      function hu(){
          var d =document;
          d.getElementById("msg").value=""
          d.getElementById("ddd").value=""
          d.getElementById("floatingPassword").value = ""
          d.getElementById("floatingInput").value =""
      }
  </script>
</div>
</div></form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<SCRipt>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</SCRipt>
</body>
</html>