<?php

$conn = mysqli_connect('localhost', 'root', '', 'library');
$select = "SELECT * FROM `workers`";
$sql = mysqli_query($conn , $select);
//$result = mysqli_fetch_assoc($sql);
//$row =  mysqli_num_rows($sql);


?>


<!DOCTYPE html>
<html style="height: 100%">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>کارمندها</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="../css/style.css" />
   <link rel="stylesheet" href="../bootstrap/bootstrap.css" />

</head>

<body dir="rtl">
  <div class="container-fluid h-100">
    <div class="h-100 row">
        <div class="d-flex flex-column bg-warning text-center col-2 p-4">
          <a href="dashboard.php">
            <h4 class="my-2">داشبورد</h4>
          </a>
          <div class="dropdown-divider"></div>
          <a href="all-students.php">
            <h4 class="my-2">ثبت دانشجو</h4>
          </a>
          <a href="all-workers.php">
            <h4 class="my-2">ثبت کارمند</h4>
          </a>
          <a href="all-books.php">
            <h4 class="my-2">ثبت کتاب</h4>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#">
            <h4 class="my-2">جستجو دانشجو</h4>
          </a>
          <a href="#">
            <h4 class="my-2">جستجو کتاب</h4>
          </a>
          <a href="#">
            <h4 class="my-2">جستجو کارمند</h4>
          </a>
        </div>
        <div class="bg-wite col-10">
          <div class="table-responsive">

              <table class="table table-responsive text-center my-2 table-bordered">
                  <thead class="">

                  <tr>
                      <th>نام</th>
                      <th>نام خانوادگی</th>
                      <th>نام پدر</th>
<!--                      <th>رشته</th>-->
                      <th>شماره تماس</th>
                      <th>تاریخ تولد</th>
                      <th>آدرس</th>
<!--                      <th>شماره دانشجویی</th>-->
                      <th>کدملی</th>

                  </tr>
                  </thead>
                  <tbody class="align-items-center">
                  <?php
                  while ($row = $sql -> fetch_assoc()){
                      echo ('<tr>' .
                          '<td>' . $row['firstname'] .'</td>'
                          .'<td>'. $row['lastname']. '</td>'
                          .'<td>'.$row['father-name'].'</td>'
//                          .'<td>'.$row['major'].'</td>'
                          .'<td>'.$row['phone'].'</td>'.
                          '<td>' .$row['date'].'</td>'.
                          '<td>' . $row['adress'] .'</td>'.
//                          '<td>' .$row['student-number'].'</td>'.
                          '<td>' . $row['national-code'] .'</td>'.
                          '</tr>');
                  }
                  ?>
                  </tbody>
              </table>


          </div>
        </div>
    </div>
  </div>

  <script src="../bootstrap/bootstrap.js"></script>
  <script src="../js/student.js"></script>
  <script src="../js/all.min.js"></script>
</body>

<div id="btn-plus">
    <a href="../worker.html" class="btn-warning text-center" style="box-shadow: 0px 0px 20px tomato;
"><p class="">+</p></a>
</div>

</html>