function but(){
    let autForm = document.querySelector("#form_aut");
let regForm = document.querySelector("#form_reg");

let butAut = document.querySelector("#autorized");
let butReg = document.querySelector("#register");

butAut.onclick = function(){
    regForm.style.display = "none";
    autForm.style.display = "block";
}

butReg.onclick = function(){
    regForm.style.display = "block";
    autForm.style.display = "none";
}

$(document).ready(function(){
    let password = $('.password');
    password.blur(function(){
        if(password.val() != ''){
            if(password.val().length < 6){
                $('#valid_password_message').text('Пароль менее 6 символов');
                $('input[type=submit]').attr('disabled', true);
            }else{
                $('#valid_password_message').text('');
                $('input[type=submit]').attr('disabled', false);
            }
        }else{
            $('#valid_password_message').text('Введите пароль');
        }
    });
});
}

