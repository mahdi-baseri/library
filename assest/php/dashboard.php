<?php 
$conn = mysqli_connect('localhost' , 'root' , '' , 'library');
$workers = "SELECT * FROM `workers`";
$workersql = mysqli_query($conn , $workers);
$workernum = mysqli_num_rows($workersql);

$students = "SELECT * FROM `students`";
$studentsql = mysqli_query($conn , $students );
$studentnum = mysqli_num_rows($studentsql);
$books = "SELECT * FROM `books`";
$booksql = mysqli_query($conn , $books);
$booknum = mysqli_num_rows($booksql);
?>
<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <style>
    <?php
    include ('../css/style.css');
    ?></style>
</head>


<body dir="rtl">
      <div class="container-fluid h-100">
        <div class="h-100 row">
            <div class="row h-100" >
          <div class="d-flex flex-column bg-warning text-center col-2 p-4">
            <a href="dashboard.php"><h4 class="my-2">داشبورد</h4></a>
            <div class="dropdown-divider"></div>
            <a href="all-students.php"><h4 class="my-2">ثبت دانشجو</h4></a>
            <a href="all-workers.php"><h4 class="my-2">ثبت کارمند</h4></a>
            <a href="all-books.php"><h4 class="my-2">ثبت کتاب</h4></a>
            <div class="dropdown-divider"></div>
            <a href="#"><h4 class="my-2">جستجو دانشجو</h4></a>
            <a href="#"><h4 class="my-2">جستجو کتاب</h4></a>
            <a href="#"><h4 class="my-2">جستجو کارمند</h4></a>
          </div>
          <div class="bg-wite col-10 my-4">
              <div class="container-fluid">
                <div class="row mx-auto justify-content-center flex-row-reverse" id="number-parent">
                  <div id="workers-num" class="d-flex flex-column rounded-3 col-sm-3 m-3 text-center bg-success">
                      <h4>
                          تعداد کارمندان
                      </h4>
                      <h3 class=" bg-warning mt-3">
                      <?php
                      echo $workernum;
                      ?>
                      </h3>
                  </div>
                  <div id="books-num" class="d-flex flex-column rounded-3 col-sm-3 m-3 text-center bg-warning">
                    <h4>
                      تعداد کتابها
                    </h4>
                    <h3 class=" bg-danger mt-3">
                      <?php
                      echo $booknum;
                      ?>
                      </h3>
                  </div>
                  <div id="students-num" class="d-flex flex-column rounded-3 col-sm-3 m-3 text-center bg-danger">
                    <h4>تعداد دانشجو ها</h4>
                    <h3 class=" bg-success mt-3">
                      <?php
                      echo $studentnum;
                      ?>
                      </h3>
                  </div>
                </div>
                <form action="change-password.php" onsubmit="return validation_change()" method="post" id="form-change" class="mx-auto d-flex flex-column" style="width: 50%;">

                  <label class="text-light my-2 mx-auto"  for="old-password"><h4 class="mx-auto"><b id="l-old-password"> رمز قبلی</b></h4></label>
                  <input type="password" id="old-password" name="password" class="form-control my-1">

                  <label class="text-light my-2 mx-auto" for="new-password"><h4 class="mx-auto"><b id="l-new-password"> رمز جدید</b></h4></label>
                  <input type="password" id="new-password" name="new-password" class="form-control my-1">

                  <label class="text-light my-2 mx-auto" for="repeat-password"><h4 class="mx-auto"><b id="l-repeat-password"> تکرار رمز </b></h4></label>
                  <input type="password" id="repeat-password" name="repeat-password" class="form-control my-1">

                  <button type="submit" class="btn btn-warning mx-auto my-3 px-4">تغییر</button>
                </form>
   
      </div>
          </div>
        </div>
    </div>
      </div>
    
      <script src="../bootstrap/bootstrap.js"></script>
      <script src="../js/dashboard.js"></script>
      <script src="../js/all.min.js"></script>

</body>
</html>