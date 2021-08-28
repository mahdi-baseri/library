<?php
$password = $_POST["password"];
$newpassword = $_POST["new-password"];
$conn = mysqli_connect('localhost' , 'root' , '' , 'library');
$get =  mysqli_query($conn , "SELECT `password` FROM `admin` WHERE `password`= '$password'");
//while (mysqli_num_rows($get)){print_r( mysqli_fetch_assoc($get));
//}
//print_r(mysqli_fetch_assoc($get)['password']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <title>تغییر رمز عبور</title>
</head>
<body>
<div class="text-center text-white" style="margin: 100px">
    <h2>
    <b class="bg-danger p-2" style="border-radius: 25px">
    <?php

    if (mysqli_num_rows($get)>0){
        $update = "UPDATE `admin` SET `password` ='$newpassword' WHERE `password` = $password";
        $result = mysqli_query($conn, $update);
        echo "رمز عبور شما با موفقیت تغییر یافت";
    }else{
        echo 'اطلاعات شما اشتباه است';
    }
    ?>
    </b>
    </h2>
    <a href="dashboard.php" type="submit" class="btn btn-warning my-3">بازگشت</a>

</div>

</body>
</html>
