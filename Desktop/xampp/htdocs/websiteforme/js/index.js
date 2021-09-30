function openlogin(){
    $('#login').modal('show');

}

function opensignup(){
    $('#singup').modal('show');

}
function openoginwhilesignup(){
    $('#singup').modal('hide');
    $('#login').modal('show');

}function openoginwhilelogin(){
    $('#login').modal('hide');
    $('#singup').modal('show');

}
function resetpass(){
    $('#login').modal('hide');
    $('#reset').modal('show');
}
function hellosign(){
    $('#reset').modal('hide');
    $('#login').modal('show');
}
function phploginget(){
    document.getElementById("logindis").style.display="block"
    document.getElementById("signinbtn").className="btn btn-danger mx-1 disabled"
}
