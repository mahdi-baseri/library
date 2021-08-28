
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>صفحه اصلی</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assest/css/index.css'>
    <link rel="stylesheet" href="assest/bootstrap/bootstrap.css">
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="d-flex flex-column text-center">
            <label class="" for="username"><h3> نام کاربری </h3></label>
            <input type="text" id="username" name="username" class="form-control">
            <label for="password"><h3>رمز ورود</h3></label>
            <input type="text" id="password" name="password" class="form-control">
            <button type="submit" class="btn btn-success mx-auto px-4 py-1 m-3">ورود</button>
        </form>
    </div>
    


    <script src='assest/js/index.js'></script>
    <script src="assest/bootstrap/bootstrap.js"></script>
    <script src="assest/js/all.min.js"></script>

    <?php
    $conn = mysqli_connect('localhost' , 'root' , '' , 'library');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST['password'];
        $username = $_POST['username'];
        $sql = mysqli_query($conn, "SELECT `username` , `password` FROM `admin` WHERE `username` = '$username'");
        $result = mysqli_fetch_assoc($sql);
        if ($username !== '' && $password !== '') {
            if (mysqli_num_rows($sql) > 0) {
                if ($username == $result['username'] && $password == $result['password']) {
                    header("location: http://localhost/library/assest/php/dashboard.php");
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("اطلاعات وارد شده نادرست است")';  //not showing an alert box.
                    echo '</script>';
                    exit;
                }
            }else {
                echo '<script language="javascript">';
                echo 'alert("اطلاعات وارد شده نادرست است")';  //not showing an alert box.
                echo '</script>';
                exit;
            }
        } else {
            echo "<div class='bg-danger text-white text-center p-2 mx-auto' style='width: 40%; border-radius: 25px'><h4 class='my-auto'>لطفا اطلاعات را کامل کنید</h4></div>";
        }
    }


    ?>
</body>
</html>