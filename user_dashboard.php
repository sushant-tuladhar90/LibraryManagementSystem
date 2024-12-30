<?php
include "connection.php";
include "include/header.php";



?>




<div class="row container-fluid" style="margin-left:-30px;">
  <link rel="stylesheet" href="style.css">
  <div class="col-2">
    <?php
    include "include/sidebar.php"

    ?>
  </div>

  <div class="col-10 ps-5px ">
    <div class="row pt-3 ">

      <?php
      $sql = "SELECT * FROM `addbook` WHERE 1";
      $data = mysqli_query($con, $sql);
      $result = mysqli_fetch_all($data, MYSQLI_ASSOC);

      $i = 1;
      foreach ($result as $key => $value) {
      ?>


        <div class="col-2">
          <div class="ui-card">
            <img src="admin/images/<?php echo $value['image'];   ?>" alt="">
            <div class="description">
              <h5><?php echo $value['bookname']; ?></h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
              <a href="viewallbook.php">Book Now</a>
            </div>
          </div>
        </div>

      <?php } ?>


    </div>
  </div>



  <?php
  include "include/footer.php"
  ?>