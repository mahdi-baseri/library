<?php

$conn = mysqli_connect('localhost', 'root', '', 'library');
$select = "SELECT * FROM `students`";
$sql = mysqli_query($conn, $select);
//$result = mysqli_fetch_assoc($sql);
//$row =  mysqli_num_rows($sql);

include "colors.php";

?>


<!DOCTYPE html>
<html class="h-100">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>دانشجوها</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
  <style>
    <?php
    include "../css/style.css";
    ?>

  </style>
</head>

<body dir="rtl" style="background-color: <?php echo $rowcolor['bg-color'] ?>;">
  <?php
  include "cms-header.php";
  ?>
  <div class="d-flex h-100">
    <?php include "cms.php" ?>
    <div class="bg-wite m-4 mx-auto" id="content">
      <div class="table-responsive">
        <table class="table text-center my-2 table-bordered" style="border: 1px solid <?php echo $text ?>;">
          <thead style="background-color: <?php echo $text ?>; color: <?php echo $panel ?>;">
            <tr>
              <th>نام</th>
              <th>نام خانوادگی</th>
              <th>نام پدر</th>
              <th>رشته</th>
              <th>شماره تماس</th>
              <th>تاریخ تولد</th>
              <th>آدرس</th>
              <th>شماره دانشجویی</th>
              <th>کدملی</th>
            </tr>
          </thead>
          <tbody class="align-items-center" style="background-color: <?php echo $panel ?>; color: <?php echo $text ?>;">
            <?php
            while ($row = $sql->fetch_assoc()) {
              echo ('<tr>' .
                '<td>' . $row['firstname'] . '</td>'
                . '<td>' . $row['lastname'] . '</td>'
                . '<td>' . $row['father-name'] . '</td>'
                . '<td>' . $row['major'] . '</td>'
                . '<td>' . $row['phone'] . '</td>' .
                '<td>' . $row['date'] . '</td>' .
                '<td>' . $row['address'] . '</td>' .
                '<td>' . $row['student-number'] . '</td>' .
                '<td>' . $row['national-code'] . '</td>' .
                '</tr>');
            }
            ?>
          </tbody>
        </table>


      </div>
    </div>
  </div>
  <div id="btn-plus"  >
    <a href="add-student.php" class="text-center" style="background-color: <?php echo $text ?>; color: <?php echo $panel ?>;">
      <h1 class="my-auto">+</h1>
    </a>
  </div>

  <script src="../bootstrap/bootstrap.js"></script>
  <script src="../js/student.js"></script>
  <script src="../js/all.min.js"></script>
  <script src="../js/res-menu.js"></script>

</body>



</html>