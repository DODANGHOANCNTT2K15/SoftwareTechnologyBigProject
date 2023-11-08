var login = document.querySelector(".login");
var signup = document.querySelector(".signup");
var form = document.querySelector(".form");
var hiden_form = document.querySelector(".cover_login_signup");
var button_change = document.querySelector("#change_ID");

button_change.addEventListener('click', function(){
    if(button_change.innerHTML === "Đăng nhập"){
        button_change.innerHTML = "Đăng ký";
        form.style.height = 300 + "px";
        login.style.marginTop = 0 + "px";
        hiden_form.style.height = 250 + "px";
    }else{
        button_change.innerHTML = "Đăng nhập";
        form.style.height = 450 + "px";
        login.style.marginTop = -250 + "px";
        hiden_form.style.height = 400 + "px";
    }
})