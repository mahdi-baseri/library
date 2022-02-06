<?php
include "colors.php";
?>

<!DOCTYPE html>
<html class="h-100">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ثبت کتاب</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <style>
        <?php
        include "../css/style.css";
        include "../css/register.css";
        ?>input,
        select,
        textarea {
            box-shadow: 0 0 10px <?php echo $panel ?> !important;
        }

        .custom-btn {
            background-color: <?php echo $text ?> !important;
            color: <?php echo $panel ?> !important;
            box-shadow: 0 0 10px <?php echo $panel ?>;
        }
    </style>
</head>

<body dir="rtl" style="background-color: <?php echo $rowcolor['bg-color'] ?>;">
    <?php
    include "cms-header.php";
    ?>
    <div class="d-flex h-100">
        <?php include "cms.php" ?>
        <div class="bg-wite m-4 mx-auto" id="content">
            <div class="container-fluid">
                <form action="book.php" name="login-form" onsubmit="return validation()" method="POST">
                    <div class="row">
                        <div class="d-flex flex-column col-md-6" id="label-parent" dir="rtl">
                            <label for="title" class="my-2 text-center"><b id="l-title"></b></label>
                            <input class="form-control p-2 my-2" id="title" name="title" type="text" placeholder="عنوان">
                            <label for="writer" class="my-2 text-center"><b id="l-writer"></b></label>
                            <input class="form-control p-2 my-2" id="writer" name="writer" type="text" placeholder="نویسنده">
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <label for="subject" class="my-2 text-center"><b id="l-subject"></b></label>
                            <input class="form-control p-2 my-2" id="subject" name="subject" type="text" placeholder="موضوع">
                            <label for="publisher" class="my-2 text-center"><b id="l-publisher"></b></label>
                            <input class="form-control p-2 my-2" id="publisher" name="publisher" type="text" placeholder="ناشر">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center mt-3 mx-1">
                        <button class="btn custom-btn col-md-2 mx-2 my-2 h-100" type="submit">ثبت</button>
                        <a href="all-books.php" class="btn custom-btn col-md-2 mx-2 h-100 my-2">انصراف</a>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="../bootstrap/bootstrap.js"></script>
    <script src="../js/book.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/res-menu.js"></script>


</body>

</html>