<?php
$conn = mysqli_connect('localhost' , 'root' , '' , 'library');
if (!$conn) {
    echo "خطا در ارتباط با سرور";
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$nationalcode = $_POST['national-code'];
$address = $_POST['address'];
$fathername = $_POST['father-name'];
$date = $_POST['date'];
//echo ( $fathername .'<br/>' . $lastname .'<br/>' . $phone .'<br/>' . $nationalcode .'<br/>' . $address .'<br/>' . $fathername .'<br/>' . $major .'<br/>'. $date .'<br/>'. $studentnumber .'<br/>');
$insert = "INSERT INTO workers
    (`firstname` , `lastname` , `father-name` , `date` , `phone` , `adress` , `national-code`)
     VALUES
    ('$firstname' , '$lastname' , '$fathername' , '$date' , '$phone' , '$address' , '$nationalcode')";
//$insert = "INSERT INTO `students` (`id`, `firstname`, `lastname`, `father-name`, `major`, `phone`, `date`, `address`, `student-number`, `national-code`) VALUES (NULL, 'lkjh', 'dsd', 'sdfnn', 'dsfdgh', '01589', '2021-08-24', 'sdefrghjk', '0258', '02589');";
$sql =  mysqli_query($conn , $insert );

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            background-color: #ece1be !important;
        }
    </style>
    <style>
        <?php
        include ('css/style.css');
 ?>
    </style>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <title>student-register</title>
</head>
<body>
<div class="rounded bg-light text-center p-3 mx-auto my-5 d-flex flex-column align-items-center " style="width:60% !important;">
    <p style="text-shadow: 0 0 10px tomato"> <b>
            <?php if ($sql){
            echo ('اطلاعات کارمند با موفقیت ثبت شد');

        }?></b>
    </p>
    <a href="all-workers.php" class="btn btn-warning mt-3">پنل مدیریتی</a>
</div>

</body>
</html>
