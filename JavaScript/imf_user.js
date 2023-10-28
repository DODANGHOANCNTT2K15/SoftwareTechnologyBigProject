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

// sửa thông tin người dùng
var edit_information_user = document.querySelector('#edit_imformation_user')
var turnOn_form_imf_user = document.querySelector('.change_information_user')
edit_information_user.addEventListener('click',function(){
    turnOn_form_imf_user.style.display = 'flex';
});

var exit_change_imf_user = document.querySelector('.change_information_user>.exit_change_imf');
exit_change_imf_user.addEventListener('click',function(){
    turnOn_form_imf_user.style.display = 'none';
});


//sửa email người dùng
var edit_Email_user = document.querySelector('#edit_imformation_user_1')
var turnOn_form_Email_user = document.querySelector('.change_Email_user')
edit_Email_user.addEventListener('click',function(){
    turnOn_form_Email_user.style.display = 'flex';
});

var exit_change_Email_user = document.querySelector('.change_Email_user>.exit_change_imf');
exit_change_Email_user.addEventListener('click',function(){
    turnOn_form_Email_user.style.display = 'none';
});


// sửa passwork người dùng
var edit_Passwork_user = document.querySelector('#edit_imformation_user_2')
var turnOn_form_Passwork_user = document.querySelector('.change_Passwork_imf')
edit_Passwork_user.addEventListener('click',function(){
    turnOn_form_Passwork_user.style.display = 'flex';
});

var exit_change_Passwork_user = document.querySelector('.change_Passwork_imf>.exit_change_imf');
exit_change_Passwork_user.addEventListener('click',function(){
    turnOn_form_Passwork_user.style.display = 'none';
});


// sửa số điện thoại người dùng
var edit_Phone_user = document.querySelector('#edit_imformation_user_3')
var turnOn_form_Phone_user = document.querySelector('.change_Phone_imf')
edit_Phone_user.addEventListener('click',function(){
    turnOn_form_Phone_user.style.display = 'flex';
});

var exit_change_Phone_user = document.querySelector('.change_Phone_imf>.exit_change_imf');
exit_change_Phone_user.addEventListener('click',function(){
    turnOn_form_Phone_user.style.display = 'none';
});

// Thêm địa chỉ
var edit_Address_user = document.querySelector('.address_add')
var turnOn_form_Address_user = document.querySelector('.add_address_user')
edit_Address_user.addEventListener('click',function(){
    turnOn_form_Address_user.style.display = 'flex';
});

var exit_change_Address_user = document.querySelector('.add_address_user>.exit_change_imf');
exit_change_Address_user.addEventListener('click',function(){
    turnOn_form_Address_user.style.display = 'none';
});