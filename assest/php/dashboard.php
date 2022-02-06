<?php
$conn = mysqli_connect('localhost', 'root', '', 'library');
$workers = "SELECT * FROM `workers`";
$workersql = mysqli_query($conn, $workers);
$workernum = mysqli_num_rows($workersql);

$students = "SELECT * FROM `students`";
$studentsql = mysqli_query($conn, $students);
$studentnum = mysqli_num_rows($studentsql);
$books = "SELECT * FROM `books`";
$booksql = mysqli_query($conn, $books);
$booknum = mysqli_num_rows($booksql);

include "colors.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>داشبورد</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="../bootstrap/bootstrap.css">
  <style>
    <?php
    include('../css/style.css');
    ?>.custom-card {
      background-color: <?php echo $panel ?>;
      box-shadow: 0 0 10px <?php echo $text ?>;
    }

    input[type=text],input[type=password],
    select,
    textarea {
      box-shadow: 0 0 10px <?php echo $panel ?> !important;
    }

    .custom-card h3 {
      background-color: <?php echo $bg ?>;
      color: <?php echo $text ?>;
      box-shadow: 0 0 4px <?php echo $text ?>;
    }
    @media screen and (min-width:500px) {
      html{
        height: 100%;
      }
    }
  </style>
</head>


<body dir="rtl" id="body" style="background-color: <?php echo $bg ?>;">
  <?php
  include "cms-header.php";
  ?>
  <div class="d-flex h-100">
    <?php
    include "cms.php"
    ?>

    <div class="bg-wite m-4" id="content">
      <!-- cards -->
      <div class="row mx-auto justify-content-center flex-row-reverse" id="number-parent">
        <div id="workers-num" class="d-flex flex-column rounded-3 col-sm-3 m-3 text-center custom-card">
          <h4 style="color: <?php echo $text ?>;">
            تعداد کارمندان
          </h4>
          <h3 class="mt-3">
            <?php
            echo $workernum;
            ?>
          </h3>
        </div>
        <div id="books-num" class="d-flex flex-column rounded-3 col-sm-3 m-3 text-center custom-card">
          <h4 style="color: <?php echo $text ?>;">
            تعداد کتابها
          </h4>
          <h3 class="mt-3">
            <?php
            echo $booknum;
            ?>
          </h3>
        </div>
        <div id="students-num" class="d-flex flex-column rounded-3 col-sm-3 m-3 text-center custom-card">
          <h4 style="color: <?php echo $text ?>;">تعداد دانشجو ها</h4>
          <h3 class="mt-3">
            <?php
            echo $studentnum;
            ?>
          </h3>
        </div>
      </div>
      <div class="row">
        <form action="change-password.php" class="mx-auto d-flex my-4 flex-column col-md-5" onsubmit="return validation_change()" method="post" id="form-change">
          <h2 class="mx-auto"><b>تغییر رمز عبور</b></h2>
          <label class="mt-2 mx-auto" for="old-password">
            <h4 class="mx-auto"><b id="l-old-password"> رمز قبلی</b></h4>
          </label>
          <input type="password" id="old-password" name="password" class="form-control input-style my-1">

          <label class="mt-2 mx-auto" for="new-password">
            <h4 class="mx-auto"><b id="l-new-password"> رمز جدید</b></h4>
          </label>
          <input type="password" id="new-password" name="new-password" class="form-control input-style my-1">

          <label class="mt-2 mx-auto" for="repeat-password">
            <h4 class="mx-auto"><b id="l-repeat-password"> تکرار رمز </b></h4>
          </label>
          <input type="password" id="repeat-password" name="repeat-password" class="form-control input-style my-1">

          <button type="submit" class="btn mx-auto my-3 px-4" style="background-color: <?php echo $panel ?>; color: <?php echo $text ?>;">تغییر</button>
        </form>
        <form action="" method="POST" class="mx-auto d-flex my-4 flex-column col-md-5" id="form-change">
          <h2 class="mx-auto"><b>تغییر رنگ داشبورد</b></h2>
          <div class="row my-3">
            <label class="radio-inline m-5 col d-flex justify-content-center color-label"><input class="my-auto" type="radio" name="radio" value="brown">
              <div id="colors-circle-brown">
                <span id="first"></span>
                <span id="second"></span>
                <span id="third"></span>
              </div>
            </label>
            <label class="radio-inline col d-flex justify-content-center color-label"><input class="my-auto" type="radio" name="radio" value="green">
              <div id="colors-circle-green">
                <span id="first"></span>
                <span id="second"></span>
                <span id="third"></span>
              </div>
            </label>
            <label class="radio-inline col d-flex justify-content-center color-label"><input class="my-auto" type="radio" name="radio" value="pink">
              <div id="colors-circle-pink">
                <span id="first"></span>
                <span id="second"></span>
                <span id="third"></span>
              </div>
            </label>
            <label class="radio-inline col d-flex justify-content-center color-label"><input class="my-auto" type="radio" name="radio" value="orange">
              <div id="colors-circle-orange">
                <span id="first"></span>
                <span id="second"></span>
                <span id="third"></span>
              </div>
            </label>
            <label class="radio-inline col d-flex justify-content-center color-label"><input class="my-auto" type="radio" name="radio" value="yellow">
              <div id="colors-circle-yellow">
                <span id="first"></span>
                <span id="second"></span>
                <span id="third"></span>
              </div>
            </label>
            <div class="d-flex">
              <button type="submit" name="btn-color" class="btn mx-auto my-3 px-4" style="background-color: <?php echo $panel ?>; color: <?php echo $text ?>;">تغییر رنگ</button>
            </div>
        </form>
      </div>
      <br>
      <?php
      if (isset($_POST['btn-color'])) {
        if (!empty($_POST['radio'])) {
          $radio = $_POST['radio'];
          if ($radio == 'orange') {
            mysqli_query($conn, "UPDATE `colors` SET `bg-color`='#f7f7f7', `panel-color` = '#364853' , `text-color`='#fd4f26'");
            // mysqli_query($conn, "UPDATE `colors` SET `bg-color`='#eedbc4', `panel-color` = '#f76c30' , `text-color`='black'");
            // header("location : http://localhost/old/library/assest/php/dashboard.php");
            // header("Refresh:0");
          } else if ($radio == 'brown') {
            mysqli_query($conn, "UPDATE `colors` SET `bg-color`='#ccb3a3', `panel-color` = '#661414' , `text-color`='#e5d7c4'");
          } else if ($radio == 'pink') {
            mysqli_query($conn, "UPDATE `colors` SET `bg-color`='#d98193', `panel-color` = '#ffe3e4 ' , `text-color`='#252e56'");
          } else if ($radio == 'green') {
            mysqli_query($conn, "UPDATE `colors` SET `bg-color`='#f5f3e7 ', `panel-color` = '#1b4d60' , `text-color`='#d8ddb7'");
          } else if ($radio == 'yellow') {
            mysqli_query($conn, "UPDATE `colors` SET `bg-color`='#dbc8af ', `panel-color` = '#d6a93b' , `text-color`='#2e3460'");
          }
        } else {
          echo " لطفا یک رنگ را انتخاب کنید.";
        }
      }
      ?>
      <br>
      <h1 id="color-value"></h1>
    </div>

  </div>
  <script src="../bootstrap/bootstrap.js"></script>
  <script src="../js/dashboard.js"></script>
  <script src="../js/all.min.js"></script>
  <script src="../js/res-menu.js"></script>
  <script>
    <?php include "../js/colors.js"; ?>
  </script>

  </div>

</body>

</html>