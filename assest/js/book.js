
function validation(){
    var min = 3;
    var title = document.forms['login-form']['title'].value;
    var subject = document.forms['login-form']['subject'].value;
    var writer = document.forms['login-form']['writer'].value;
    var publisher = document.forms['login-form']['publisher'].value;
    // var fathername = document.forms['login-form']['father-name'].value;
    // var date = document.forms['login-form']['date'].value;
    // var address = document.forms['login-form']['address'].value;
    if (title == ''){
        document.getElementById('l-title').innerHTML='عنوان نمیتواند خالی باشد' ;
        document.getElementById('l-title').style.padding='7px 10px';
        statusf = false;
    }
    // else if((title.length) < min){
    //     document.getElementById('l-title').innerHTML='عنوان نمیتواند کمتر از 3 حرف  باشد' ;
    //     statusf = false;
    // }
    else{
        document.getElementById('l-title').innerHTML='' ;
        document.getElementById('l-title').style.padding='0';
        statusf = false;
    }
    if (subject == ''){
        document.getElementById('l-subject').innerHTML='موضوع نمیتواند خالی باشد' ;
        document.getElementById('l-subject').style.padding='7px 10px';
        statusf = false;
    }
    // else if((subject.length) < min){
    //     document.getElementById('l-subject').innerHTML='موضوع نمیتواند کمتر از 3 حرف  باشد' ;
    //     statusf = false;
    // }
    else{
        document.getElementById('l-subject').innerHTML='';
        document.getElementById('l-subject').style.padding='0';
        statusf = false;
    }
    if ((title,subject !== '' )&& subject.length > min && title.length > min){
        document.getElementById('l-subject').innerHTML='';
    }

    if (writer == ''){
        document.getElementById('l-writer').innerHTML = 'نویسنده نمیتواند خالی باشد';
        document.getElementById('l-writer').style.padding='7px 10px';
    }else {
        document.getElementById('l-writer').innerHTML = '';
        document.getElementById('l-writer').style.padding='0';
    }
 

    if (publisher == ''){
        document.getElementById('l-publisher').innerHTML = 'ناشر نمیتواند خالی باشد';
        document.getElementById('l-publisher').style.padding='7px 10px';
    }else {
        document.getElementById('l-publisher').innerHTML = '';
        document.getElementById('l-publisher').style.padding='0';
    }
    if (title !== '' && subject !== '' && writer !== '' && publisher !== '') {
        statusf = true;
    }
    return statusf;

}