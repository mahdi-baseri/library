<?php
include "colors.php";
?>
<!DOCTYPE html>
<html class="h-100">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ثبت دانشجو</title>
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
        <div class="bg-wite mx-auto" id="content">
            <div class="container-fluid">
                <form action="student.php" name="login-form" onsubmit="return validation()" method="POST">
                    <div class="row">
                        <div class="d-flex flex-column col-md-6" id="label-parent" dir="rtl">
                            <label for="firstname" class="my-2 text-center"><b id="l-firstname"></b></label>
                            <input class="form-control p-2 my-2" id="firstname" name="firstname" type="text" placeholder="نام">
                            <label for="phone" class="my-2 text-center"><b id="l-phone"></b></label>
                            <input class="form-control p-2 my-2" id="phone" name="phone" type="number" placeholder="تلفن">
                            <label for="father-name" class="my-2 text-center"><b id="l-father-name"></b></label>
                            <input class="form-control p-2 my-2" id="father-name" name="father-name" type="text" placeholder="نام پدر">
                            <label for="date" class="my-2 text-center"><b id="l-date"></b></label>
                            <input class="form-control p-2 my-2" id="date" name="date" type="date" placeholder="تاریخ تولد">

                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <label for="lastname" class="my-2 text-center"><b id="l-lastname"></b></label>
                            <input class="form-control p-2 my-2" id="lastname" name="lastname" type="text" placeholder="نام خانوادگی">
                            <label for="national-code" class="my-2 text-center"><b id="l-national-code"></b></label>
                            <input class="form-control p-2 my-2" id="national-code" name="national-code" type="number" placeholder="کدملی">
                            <label for="major" class="my-2 text-center"><b id="l-major"></b></label>
                            <select class="form-select my-2" name="major" id="major">
                                <option value="">رشته تحصیلی</option>
                                <option value="ریاضی">
                                    <p>ریاضی</p>
                                </option>
                                <option value="تجربی">تجربی</option>
                                <option value="فنی حرفه ای">فنی حرفه ای</option>
                                <option value="علوم اسلامی">علوم اسلامی</option>
                                <option value="علوم انسانی">علوم انسانی</option>
                                <option value="فیزیک">فیزیک</option>
                                <option value="شیمی">شیمی</option>
                            </select>
                            <label for="student-number" class="my-2 text-center"><b id="l-student-number"></b></label>
                            <input class="form-control p-2 my-2" id="student-number" name="student-number" type="number" placeholder="شماره دانشجویی">

                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <label for="address" class="my-2 text-center"><b class="text-center" id="l-address"></b></label>
                        <textarea name="address" id="address" class="form-control p-2 p-3 h-100" placeholder="آدرس شما..."></textarea>
                    </div>
                    <div class="row d-flex justify-content-center mt-3 mx-1">
                        <button class="btn col-md-2 mx-2 my-2 h-100 custom-btn" type="submit">ثبت</button>
                        <a href="dashboard.php" class="btn col-md-2 mx-2 h-100 custom-btn my-2">انصراف</a>



                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="../bootstrap/bootstrap.js"></script>
    <script src="../js/student.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/res-menu.js"></script>ri

</body>

</html>