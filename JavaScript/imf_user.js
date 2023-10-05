var imf_user = document.querySelector('.left_information_user');
var add_user = document.querySelector('.left_address_user');
var _imf = document.querySelector('.content_right_information_user');
var _address = document.querySelector('.content_right_address_user');

imf_user.addEventListener('click', function(){
    _imf.style.display = 'block';
    _address.style.display = 'none';
});

add_user.addEventListener('click',function(){
    _imf.style.display = 'none';
    _address.style.display = 'block';
});

var edit_information_user = document.querySelector('#edit_imformation_user')
var turnOn_form_imf_user = document.querySelector('.change_information_user')
edit_information_user.addEventListener('click',function(){
    turnOn_form_imf_user.style.display = 'flex';
});

var exit_change_imf_user = document.querySelector('.exit_change_imf');
exit_change_imf_user.addEventListener('click',function(){
    turnOn_form_imf_user.style.display = 'none';
});

var exit = function(){
    turnOn_form_imf_user.style.display = 'none';
}