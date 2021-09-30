window.onload = function somefunction (){
if(window.location.search == "?login"){

document.getElementById("loggedinnotification").style.display="block"
//code

    return false;

    }else{document.getElementById("loggedinnotification").style.display="none"};
    if(window.location.search == "?session"){

document.getElementById("sessionreturn").style.display="block"
//code

    return false;

    }else{document.getElementById("sessionreturn").style.display="none"}};