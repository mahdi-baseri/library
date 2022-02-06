  <!-- start header -->
  <div class="d-flex justify-content-between flex-row-reverse px-2" id="cms-header" style="background-color: <?php echo $rowcolor['panel-color'] ?>;">
      <a href="dashboard.php" class="rounded-circle me-2" id="profile-img" style="box-shadow:0 0 5px <?php echo $bg ?>;"><img class="zoom" src="../img/leo.jfif" alt="profile-image"/></a>
      <div class="d-flex">
          <button class="btn text-white" onclick="res_menu()">
              <i class="fa fa-bars" style="font-size: 20px; color: <?php echo $rowcolor['text-color'] ?>;"></i>
          </button>
          <a href="../../index.php" class="my-auto mx-2" style="color: <?php echo $rowcolor['text-color'] ?>;"><i class="fa fa-home"></i></a>
          <a href="#" class="my-auto"><i class="fa fa-bell mx-2" aria-hidden="true" style="margin-right: 5px; color: <?php echo $rowcolor['text-color'] ?>;"></i>
          </a>
          <!-- <a href="#" class="res-txt my-auto" id="logo"><img class="img-fluid" src="img/audi.jfif" alt="fsdfs" width="90px" /></a> -->
      </div>
  </div>
  <!-- end header -->