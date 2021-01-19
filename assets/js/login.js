
function signUpButton(){
    
    var element = document.getElementById("container-login");
    element.classList.add("right-panel-active");
    
}

function signInButton() {
    var element = document.getElementById("container-login");
    element.classList.remove("right-panel-active");
   
}


function logOut() {
    $.get("Business/logout_user.php");
    setTimeout(() => window.location.reload(), 500);
    return true;
}