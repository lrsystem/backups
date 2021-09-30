window.onload = function somefunction (){
    if(window.location.search == "?err"){
    
    document.getElementById("loggedinnotification").style.display="block"
    //code
    
        return false;
    
        }
        
        else{document.getElementById("loggedinnotification").style.display="none"};
        if(window.location.search == "?logout"){
    
    document.getElementById("logoutnoti").style.display="block"
    //code
    
        return false;
    
        }else{document.getElementById("logoutnoti").style.display="none"};
    
        if(window.location.search == "?del"){
    
    document.getElementById("del").style.display="block"
    //code
    
        return false;
    
        }
    
    
    
    
    }