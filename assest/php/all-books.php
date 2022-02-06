<?php

$conn = mysqli_connect('localhost', 'root', '', 'library');
$select = "SELECT * FROM `books`";
$sql = mysqli_query($conn, $select);

include "colors.php";

?>


<!DOCTYPE html>
<html class="h-100">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>کتابها</title>
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
              <th>عنوان</th>
              <th>موضوع</th>
              <th>نویسنده</th>
              <th>ناشر</th>
            </tr>
          </thead>
          <tbody class="align-items-center" style="background-color: <?php echo $panel ?>; color: <?php echo $text ?>;">
            <?php
            while ($row = $sql->fetch_assoc()) {
              echo ('<tr>' .
                '<td>' . $row['title'] . '</td>'
                . '<td>' . $row['subject'] . '</td>'
                . '<td>' . $row['writer'] . '</td>'
                . '<td>' . $row['publisher'] . '</td>' .
                '</tr>');
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="../bootstrap/bootstrap.js"></script>
  <script src="../js/book.js"></script>
  <script src="../js/all.min.js"></script>
  <script src="../js/res-menu.js"></script>
</body>

<div id="btn-plus">
  <a href="add-book.php" class="text-center" style="background-color: <?php echo $text ?>; color: <?php echo $panel ?>;">
    <h1 class="my-auto">+</h1>
  </a>
</div>

</html>