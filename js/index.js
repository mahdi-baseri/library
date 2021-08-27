
function validation(){
    var min = 3;
    var lastname = document.forms['login-form']['lastname'].value;
    var firstname = document.forms['login-form']['firstname'].value;
    var nationalcode = document.forms['login-form']['national-code'].value;
    var phone = document.forms['login-form']['phone'].value;
    var fathername = document.forms['login-form']['father-name'].value;
    var major = document.forms['login-form']['major'].value;
    var date = document.forms['login-form']['date'].value;
    var studentnumber = document.forms['login-form']['student-number'].value;
    var address = document.forms['login-form']['address'].value;
    if (firstname == ''){
        document.getElementById('l-firstname').innerHTML='نام کاربری نمیتواند خالی باشد' ;
        statusf = false;
    }else if((firstname.length) < min){
        document.getElementById('l-firstname').innerHTML='نام کاربری نمیتواند کمتر از 3 حرف  باشد' ;
        statusf = false;
    }else{
        document.getElementById('l-firstname').innerHTML='' ;
        statusf = false;
    }
    if (lastname == ''){
        document.getElementById('l-lastname').innerHTML='نام خانوادگی نمیتواند خالی باشد' ;
        statusf = false;
    }else if((lastname.length) < min){
        document.getElementById('l-lastname').innerHTML='نام خانوادگی نمیتواند کمتر از 3 حرف  باشد' ;
        statusf = false;
    }else{
        document.getElementById('l-lastname').innerHTML='';
        statusf = false;
    }
    if ((firstname,lastname !== '' )&& lastname.length > min && firstname.length > min){
        document.getElementById('l-lastname').innerHTML='';
    }
    if (nationalcode == ''){
        document.getElementById('l-national-code').innerHTML='کدملی نمیتواند خالی باشد'
    }else if (nationalcode.length < 9 || nationalcode.length > 10){
        document.getElementById('l-national-code').innerHTML='کدملی نامعتبر';
    }else {
        document.getElementById('l-national-code').innerHTML='';
    }
    if (phone == ''){
        document.getElementById('l-phone').innerHTML = 'تلفن نمیتواند خالی باشد';
    }else {
        document.getElementById('l-phone').innerHTML = '';
    }
    if (fathername == ''){
        document.getElementById('l-father-name').innerHTML = 'نام پدر را نمیتواند خالی باشد';
    }else {
        document.getElementById('l-father-name').innerHTML = '';
    }
    if (major == ''){
        document.getElementById('l-major').innerHTML = 'لطفا رشته را انتخاب کنید';
    }else {
        document.getElementById('l-major').innerHTML = '';
    }
    if (date == ''){
        document.getElementById('l-date').innerHTML = 'لطفا تاریخ تولد را انتخاب کنید';
    }else {
        document.getElementById('l-date').innerHTML = '';
    }
    if (studentnumber == ''){
        document.getElementById('l-student-number').innerHTML = 'شماره دانشجویی نمیتواند خالی باشد';
    }else {
        document.getElementById('l-student-number').innerHTML = '';
    }
    if (address == '') {
        document.getElementById('l-address').innerHTML = 'لطفا آدرس خود را پر کنید';
    }else{
        document.getElementById('l-address').innerHTML = '';
    }
    if (firstname.length > min && lastname.length > min && phone !== '' && (nationalcode.length >8 && nationalcode.length < 11) && fathername !== '' && major !== '' && date !== '' && studentnumber !== '' && address !== '') {
        return true;

    }
    return statusf;

}