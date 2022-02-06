<?php
include "colors.php";

?>

<!DOCTYPE html>
<html class="h-100">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>دسته بندی ها</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <style>
        <?php include('../css/style.css');
        ?><?php include('../css/menu.css');
            ?>
    </style>
</head>


<body dir="rtl" style="background-color: <?php echo $rowcolor['bg-color'] ?>;">
    <?php
    include "cms-header.php";
    ?>
    <div class="d-flex h-100">
        <?php include "cms.php" ?>
        <div class="bg-wite m-4 mx-auto row" id="content">
            <div class="col-md-4  my-3">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="text-center" onsubmit="return menuvalidation()">
                    <h2 class="text-center">افزودن دسته بندی</h2>
                    <label for="cat-name" class="my-2 text-center"><b class="text-center" id="l-cat-name"></b></label>
                    <input type="text" class="form-control my-3" name="name" id="cat-name" placeholder="نام دسته بندی">
                    <input type="text" class="form-control my-3" name="link" id="cat-link" placeholder="لینک صفحه">
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit-btn" class="btn btn-success" onclick="menuvalidation()">افزودن</button>
                    </div>
                </form>
            </div>
            <div class="table-responsive col-md my-3" dir="ltr">
                <table class="table text-center my-2 table-bordered" style="border: 1px solid <?php echo $text ?>;">
                    <thead style="background-color: <?php echo $text ?>; color: <?php echo $panel ?>;">
                        <tr>
                            <th>شماره</th>
                            <th>نام</th>
                            <th>لینک</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody class="align-items-center" style="background-color: <?php echo $panel ?>; color: <?php echo $text ?>;">
                        <?php
                        $select = "SELECT * FROM `categories`";
                        $sql = mysqli_query($conn, $select);
                        while ($row = mysqli_fetch_assoc($sql)) {
                            $cat_id = $row['id'];
                            $cat_name = $row['name'];
                            $cat_link = $row['link'];
                            echo ("<tr><td>{$cat_id}</td><td>{$cat_name}</td><td>{$cat_link}</td><td><a href ='menu.php?delete={$cat_id}' class='btn btn-danger'>حذف</a></td></tr>");
                        }
                        ?>
                        <?php
                        if (isset($_GET['delete'])) {
                            $cat_id = $_GET['delete'];
                            $query = "DELETE FROM `categories` WHERE `id` = {$cat_id}";
                            $deletesql = mysqli_query($conn, $query);
                            if (!$deletesql) {
                                echo 'خطای پایگاه داده';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="../bootstrap/bootstrap.js"></script>
    <script src="../js/dashboard.js"></script>
    <script src="../js/all.min.js"></script>
    <?php
    if (isset($_POST['submit-btn'])) {
        $name = $_POST['name'];
        $link = $_POST['link'];
        if ($name != '' && $name !== null) {
            $insert = "INSERT INTO `categories` (`name` , `link`) VALUES ('$name' , '$link')";
            $ins_result = mysqli_query($conn, $insert);
            if ($ins_result) {
                echo "با موفقیت ثبت شد.";
                echo $name;
                // header('location : http://localhost/library/assest/php/menu.php');
            }
        } else {
            echo 'nottttt';
        }
    }
    ?>
    <script src="../js/menu.js"></script>
    <script src="../js/res-menu.js"></script>
</body>

</html>