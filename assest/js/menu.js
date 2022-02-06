function menuvalidation() {
var catname = document.getElementById('cat-name').value;
if (catname == null || catname == '') {
    document.getElementById('l-cat-name').innerHTML = "نام دسته بندی نمیتواند خالی باشد";
    document.getElementById('l-cat-name').style.padding='7px 10px';
    statusf = false;
}else{
    document.getElementById('l-cat-name').innerHTML = "";
    document.getElementById('l-cat-name').style.padding='0';
    statusf = true;

}
return statusf;
}