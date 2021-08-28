<?php
$conn = mysqli_connect('localhost' , 'root' , '' , 'library');
if (!$conn) {
    echo "خطا در ارتباط با سرور";
}
$title = $_POST['title'];
$subject = $_POST['subject'];
$writer = $_POST['writer'];
$publisher = $_POST['publisher'];
// $address = $_POST['address'];
// $fathername = $_POST['father-name'];
// $date = $_POST['date'];
//echo ( $fathername .'<br/>' . $lastname .'<br/>' . $phone .'<br/>' . $nationalcode .'<br/>' . $address .'<br/>' . $fathername .'<br/>' . $major .'<br/>'. $date .'<br/>'. $studentnumber .'<br/>');
$insert = "INSERT INTO `books`
    (`title` , `subject` , `writer` , `publisher`)
     VALUES
    ('$title' , '$subject' , '$writer' , '$publisher')";
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <title>ثبت کتاب</title>
</head>
<body>
<div class="rounded text-center p-3 mx-auto my-5 d-flex flex-column align-items-center " id="result-parent">
    <h4> <b>
            <?php if ($sql){
            echo ('اطلاعات کتاب با موفقیت ثبت شد');
        }?></b>
    </h4>
    <a href="all-books.php" class="btn btn-warning mt-3">پنل مدیریتی</a>
</div>

</body>
</html>
