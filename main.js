// Get the modal
var modal = document.getElementById('myModal');

var signup_modal = document.getElementsByClassName("modal-signup");

var login_modal = document.getElementsByClassName("modal-login");

var btn = document.getElementById("btnlogin");

var login_tab = document.getElementById("login-tab");

var signup_tab = document.getElementById("signup-tab");

var span = document.getElementsByClassName("close")[0];

var submit_signup = document.getElementsByClassName("btnlog")[0];

var submit_login = document.getElementsByClassName("btnlog")[1];

function click_login() {
    modal.style.display = "block";
    signup_tab.style.background = "#e7e7e7";
    login_tab.style.background = 'white';
    for(var i = 0; i < signup_modal.length; i++) {
        signup_modal[i].style.display="none";
    }
    for(var i = 0; i < login_modal.length; i++) {
        login_modal[i].style.display="block";
    }
}

function click_signup() {
    modal.style.display = "block";
    signup_tab.style.background = "white";
    login_tab.style.background = "#e7e7e7";
    for(var i = 0; i < signup_modal.length; i++) {
        signup_modal[i].style.display="block";
    }
    for(var i = 0; i < login_modal.length; i++) {
        login_modal[i].style.display="none";
    }
}

// Wher the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// When the user click sign-up button of the modal
submit_signup.addEventListener('click', function() {
    document.location.href="Get_info.php";
})