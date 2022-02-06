<?php
$conection = mysqli_connect('localhost' , 'root' , '' , 'library');
if (!$conection){
    echo "خطا در ارتباط با دیتابیس";
}?>
<nav class="navbar navbar-dark navbar-expand-lg navbar-light text-success p-3 my-3" style="border-radius: 40px; background-color: brown;">
    <!-- <img src="assest/img/logo.jfif" alt="" class="navbar-brand"> -->
    <a href="index.php" class="navbar-brand bg-creem radius p-0 px-2"><img src="assest/img/logo.png" alt="logo" width="150px" height="80px"></a>
    <button
            class="navbar-toggler m-none"
            type="button"
            data-toggle="collapse"
            data-target="#menu-list"
    >
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse my-3" id="menu-list">
        <ul class="nav">
        <?php
        $select = "SELECT * FROM `categories`";
        $sql = mysqli_query($conection , $select);
        while ($row = mysqli_fetch_assoc($sql)){
            $cat_name = $row['name'];
            $cat_link = $row['link'];
           echo "<li class='nav-item mx-2'><a href='{$cat_link}' class='nav-link hover creem'><b>{$cat_name}</b></a></li>";
        }
        ?>
        <li class="nav-item mx-2 bg-creem radius hover">
            <a href="#" class="nav-link brown">عضویت</a>
        </li>
        <li class="nav-item mx-2 bg-creem radius hover px-2">
            <a href="assest/php/login.php" class="nav-link brown">ورود</a>
        </li>
    </ul>
    </div>
</nav>


