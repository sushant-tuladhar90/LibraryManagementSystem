<?php

include "../connection.php";
include "include/header.php";
include "include/main-sidebar.php";

if (isset($_POST['submit'])) {
  if (!empty($_POST)) {

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die ();

    $bookname = $_POST['bookname'];
    $bookauthor = $_POST['bookauthor'];
    $bookpublication = $_POST['bookpublication'];
    $quantity = $_POST['quantity'];

    $sql = "SELECT * FROM `addbook` WHERE bookname='$bookname' AND bookauthor = '$bookauthor' AND bookpublication= '$bookpublication' ";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($query);
    //  echo "<pre>";
    // print_r($result);
    //  echo "<pre>";
    //  die();
    if (!empty($result)) {
      $id = $result['id'];
      $quantity = $result['quantity'] + $quantity;
      $sql = "UPDATE `addbook` SET `bookname`='$bookname',`bookauthor`='$bookauthor',`bookpublication`='$bookpublication',`quantity`='$quantity' WHERE id= $id";
      mysqli_query($con, $sql);
    } else {
      $data = mysqli_query($con, $sql);
      $table = mysqli_num_rows($data);


      if (!empty($_FILES['image']['name'])) {
        //  echo "<pre>";
        // print_r($_FILES['image']['name']);
        // echo "</pre>";
        // die ();
        $image = $_FILES['image']['name'];
        $temp_loc = $_FILES['image']['tmp_name'];
        $img_des = "images/" . $image;
        move_uploaded_file($temp_loc, $img_des);
        $sql = "INSERT INTO `addbook`(`bookname`, `bookauthor`, `bookpublication`, `quantity`, `image`) VALUES ('$bookname','$bookauthor','$bookpublication','$quantity','$image')";
        $data = mysqli_query($con, $sql);
      } else {
        $_SESSION['message'] = "Please Upload Image";
      }
    }
  }
}
?>




<?php
if (!empty($_SESSION['message'])) {
  $message = $_SESSION['message'];
  echo $message;
}




// $sql = "SELECT * FROM admin order by id DESC ";
// $data = mysqli_query($con,$sql);
// $result = mysqli_fetch_all($data,MYSQLI_ASSOC);



?>





<div class="content-wrapper">

  <section class="content">
    <?php
    if (!empty($message)) { ?>

      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?php echo $message; ?> </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php }  ?>
    <?php unset($_SESSION['message']);   ?>
    <!-- <?php
          if (!empty($message)) { ?>
 <div class="alert alert-secondary" role="alert"><?php
                                                  echo $message;
                                                  ?>
  
</div>

<?php } ?> -->






    <div class="container p-5">
      <div class="row">
        <div class="col-6 mx-auto card p-5">
          <form action="" method="post" enctype="multipart/form-data">
            <div style="padding: 5;">
              <label> Book Name :</label>
              <input type="text" name="bookname" class="form-control" required>
            </div>
            <div style="padding: 5;">
              <label> Book Author :</label>
              <input type="text" name="bookauthor" class="form-control" required>
            </div>
            <div style="padding: 5;">
              <label> Book Publication :</label>
              <input type="text" name="bookpublication" class="form-control" required>
            </div>
            <div style="padding: 5;">
              <label>Quantity :</label>
              <input type="text" name="quantity" class="form-control" required>
            </div>
            <div style="padding: 5;">
              <label>Book Photo :</label><br>
              <input type="file" name="image" required>
            </div>
            <br>
            <button class="btn btn-sm btn-primary" name="submit">Submit</button>
          </form>


        </div>
      </div>
    </div>
</div>





<!-- 
    <?php

    $i = 1;
    foreach ($result as $key => $value) { ?>
       <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $value['bookname'];
          ?></td>
      <td><?php echo $value['bookauthor']; ?></td>
      <td><?php echo $value['bookpublication']; ?></td>
      <td><?php echo $value['quantity']; ?></td>
      <td> 
<img src="images/<?php echo $value['image']; ?>" height="50">  
      </td>
        <td>
      <a href="admin_edit.php?id=<?php echo $value['id']; ?>" class="btn btn-success btn-sm"> <i class="fa fa-pen"></i></a>
<a href="admin_delete.php ?id=<?php echo $value['id']; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></a>

      </td>
    </tr>
    <?php }
    ?>  -->




</section>
</div>


<?php


include "include/footer.php";
?>