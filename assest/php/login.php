
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
</head>
<body dir="rtl">
<div class="container-fluid">

    <?php
    $conection = mysqli_connect('localhost' , 'root' , '' , 'library');
    if (!$conection){
        echo "خطا در ارتباط با دیتابیس";
    }?>
    <nav class="navbar navbar-dark navbar-expand-lg navbar-ligh text-success p-3 my-3" style="border-radius: 40px; background-color: brown;">
    <a href="../../index.php" class="navbar-brand bg-creem radius p-0 px-2"><img src="../../assest/img/logo.png" alt="logo" width="150px" height="80px"></a>
    <button
            class="navbar-toggler m-none"
            type="button"
            data-toggle="collapse"
            data-target="#menu-list"
    >
        <i class="fa fa-bars"></i>
    </button>
        <div class="collapse navbar-collapse" id="menu-list">
            <ul class="nav">

                <?php
                $select = "SELECT * FROM `categories`";
                $sql = mysqli_query($conection , $select);
                while ($row = mysqli_fetch_assoc($sql)){
                    $cat_name = $row['name'];
                    $cat_link = $row['link'];
                    echo "<li class='nav-item mx-2'><a href='{$cat_link}' class='nav-link hover creem'><b>{$cat_name}</b></a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>


</div>
<div class="container m-5 mx-auto">

        <form action=""
             method="post" class="d-flex flex-column text-center">
            <label class="brown" for="username"><h3> نام کاربری </h3></label>
            <input type="text" id="username" name="username" class="form-control">
            <label for="password" class="brown"><h3>رمز ورود</h3></label>
            <input type="password" id="password" name="password" class="form-control">
            <button type="submit" class="btn mx-auto bg-brown creem px-4 py-1 m-4 brown">ورود</button>
        </form>
    </div>
    <script src="../../assest/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assest/bootstrap/bootstrap.min.js"></script>
</body>
</html>
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
                    header("location: http://localhost/old/library/assest/php/dashboard.php");
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