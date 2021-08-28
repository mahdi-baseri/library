
function validation_change() {
var oldpas = document.getElementById('old-password').value;
var newpas = document.getElementById('new-password').value;
var repeatpas = document.getElementById('repeat-password').value;
if (oldpas == '' || oldpas == null) {
    document.getElementById('l-old-password').classList.add('radius-25');
    document.getElementById('l-old-password').classList.add('bg-danger');
    document.getElementById('l-old-password').innerHTML = "نمیتواند خالی باشد";  
    statusf=false;
}else{
    document.getElementById('l-old-password').classList.remove('radius-25');
    document.getElementById('l-old-password').classList.remove('bg-danger');
    document.getElementById('l-old-password').innerHTML = "";  
}
if (newpas == '' || newpas == null) {
    document.getElementById('l-new-password').classList.add('radius-25');
    document.getElementById('l-new-password').classList.add('bg-danger');
    document.getElementById('l-new-password').innerHTML = "نمیتواند خالی باشد";  
    statusf=false;
}else{
    document.getElementById('l-new-password').classList.remove('radius-25');
    document.getElementById('l-new-password').classList.remove('bg-danger');
    document.getElementById('l-new-password').innerHTML = "";  
}
if (repeatpas == '' || repeatpas == null) {
    document.getElementById('l-repeat-password').classList.add('radius-25');
    document.getElementById('l-repeat-password').classList.add('bg-danger');
    document.getElementById('l-repeat-password').innerHTML = "نمیتواند خالی باشد";  
    statusf=false;
}else{
    document.getElementById('l-repeat-password').classList.remove('radius-25');
    document.getElementById('l-repeat-password').classList.remove('bg-danger');
    document.getElementById('l-repeat-password').innerHTML = "";  
}
if (newpas !== repeatpas) {
    document.getElementById('l-new-password').classList.add('radius-25');
    document.getElementById('l-new-password').classList.add('bg-danger');
    document.getElementById('l-new-password').innerHTML = "تکرار رمز اشتباه است";  
}
if (oldpas !== '' && newpas !== '' && repeatpas !== '' && newpas == repeatpas) {
    statusf = true;
}
return statusf;
}