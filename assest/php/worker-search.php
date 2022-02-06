<?php include "colors.php"; ?>

<!DOCTYPE html>
<html class="h-100">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>دانشجوها</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
    <style>
        <?php include "../css/style.css" ?>
    </style>
</head>

<body dir="rtl" style="background-color: <?php echo $rowcolor['bg-color'] ?>;">
    <?php
    include "cms-header.php";
    ?>
    <div class="d-flex h-100">
        <?php include "cms.php" ?>
        <div class="bg-wite m-4 mx-auto" id="content">
            <form action="" method="post" class="mx-5">
                <div class="d-flex my-3">
                    <input type="search" name="search" class="form-control p-3" placeholder="نام کارمند مورد نظر را وارد کنید" style="border-radius: 0 5px 5px 0;">
                    <button type="submit" name="search-btn" class="btn btn-success p-3" style="border-radius: 5px 0 0 5px;">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
            <div class="table-responsive">
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'library');

                if (isset($_POST['search-btn'])) {
                    $search = $_POST['search'];
                    echo "<a></a>";
                    $select = "SELECT * FROM `workers` WHERE `firstname` LIKE '%$search%' ";
                    $sql = mysqli_query($conn, $select); ?>

<table class="table text-center my-2 table-bordered" style="border: 1px solid <?php echo $text ?>;">
                        <thead style="background-color: <?php echo $text ?>; color: <?php echo $panel ?>;">

                            <tr>
                                <th>نام</th>
                                <th>نام خانوادگی</th>
                                <th>نام پدر</th>
                                <th>شماره تماس</th>
                                <th>تاریخ تولد</th>
                                <th>آدرس</th>
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
                                    . '<td>' . $row['phone'] . '</td>' .
                                    '<td>' . $row['date'] . '</td>' .
                                    '<td>' . $row['adress'] . '</td>' .
                                    '<td>' . $row['national-code'] . '</td>' .
                                    '</tr>');
                            }
                            ?>
                        </tbody>
                    </table>

                <?php
                } else {
                }
                ?>

            </div>
        </div>
    </div>

    <script src="../bootstrap/bootstrap.js"></script>
    <script src="../js/student.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/res-menu.js"></script>

</body>



</html>