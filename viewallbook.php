<?php
include "connection.php";
include "include/header.php";



$sql = "SELECT * FROM addbook ORDER BY id DESC";
$data = mysqli_query($con, $sql);
$result = mysqli_fetch_all($data, MYSQLI_ASSOC);



// Check if the search button is clicked
if (isset($_GET['search'])) {
  $search = $_GET['search'];
  // Modify the SQL query to include the search term
  $sql = "SELECT * FROM addbook WHERE username LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id DESC";
  $data = mysqli_query($con, $sql);
  $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
}
?>


<?php
if (!empty($_SESSION['message'])) { ?>




  <div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong><?php echo $_SESSION['message'] ?></strong>
  </div>


<?php } ?>

<?php
if (!empty($_SESSION['message'])) {

  unset($_SESSION['message']);
} ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Books</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .quantity-control {
      display: flex;
      align-items: center;
    }

    .quantity-control .quantity-input {
      width: 50px;
      text-align: center;
    }

    .quantity-control button {
      width: 25px;
      height: 25px;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
    }
  </style>

</head>

<body>

  <div class="row container-fluid" style="margin-left:-30px;">
    <div class="col-2">
      <?php
      include "include/sidebar.php"

      ?>
    </div>

    <div class="col-10">



      <div class="container content-wrapper">
        <section class="content">

          <div class="card text-center ">
            <div class="card-body">
              <h3 class="text-center p-2">List of Books</h3> <br>
              <!-- <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                  <input class="form-control mr-sm-2 text-end" type="search" placeholder="Search" aria-label="Search" name="search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </nav> -->
              <table class="table caption-top">

                <thead>
                  <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Book Author</th>
                    <th scope="col">Book Publication</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Image</th>
                    <th scope="col">Book Now</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($result as $key => $value) {
                  ?>
                    <tr>
                      <th scope="row"><?php echo $i++; ?></th>
                      <!-- <td><?php echo $value['id']; ?></td> -->
                      <td><?php echo $value["bookname"]; ?></td>
                      <td><?php echo $value["bookauthor"]; ?></td>
                      <td><?php echo $value["bookpublication"]; ?></td>
                      <td><?php echo $value["quantity"]; ?></td>
                      <td>
                        <img src="admin/images/<?php echo $value['image']; ?>" height="50">
                      </td>
                      <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary text-end " data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $value['id'];   ?>">
                          Request Book
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-<?php echo $value['id'];   ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" style="background: rgb(0,255,89);
background: linear-gradient(56deg, rgba(0,255,89,1) 0%, rgba(2,170,7,1) 92%);">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Request Book</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">

                                <p style="color:black"><u>Book Name:</u> &nbsp &nbsp<?php echo $value["bookname"]; ?></p>

                                <p style="color:black"><u>Book Authour:</u> &nbsp &nbsp<?php echo $value["bookauthor"] ?></p>
                                <p style="color:black"><u>Book Publisher:</u> &nbsp &nbsp<?php echo $value["bookpublication"] ?></p>
                                <p style="color:black"><u>Book Quantity:</u> &nbsp &nbsp<?php echo $value["quantity"] ?></p>
                                <p style="color:black"> <u>Image: <br> <br> </u> &nbsp &nbsp <img src="admin/images/<?php echo $value['image']; ?>" height="70"> </p>

                                <!-- <div class="quantity-control">
                <h6>Quantity:</h6> &nbsp;&nbsp;&nbsp;
    <button class="decrease-btn">-</button>
    <input type="number" class="quantity-input" value="1" placeholder="Minimum quantity is 1" min="1">
    <button class="increase-btn">+</button>
  </div> -->
                                <?php

                                if ($value['quantity'] == 0) {    ?>
                                  <div class="text-end">
                                    <span class="badge text-bg-warning">Book currently not availble!</span>
                                    <!-- <button disabled href="requestbook.php?id=<?php echo $value["id"] ?>" class="btn btn-primary" type="submit">Request Book</button> -->
                                  </div>
                                <?php } else {   ?>
                                  <div class="text-end"><a href="requestbook.php?id=<?php echo $value["id"] ?>" class="btn btn-primary" type="submit">Request Book</a></div>
                                <?php } ?>
                              </div>

                            </div>
                          </div>
                        </div>

                      </td>

                    </tr>
                  <?php
                  }

                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </section>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


    <!-- <script>
    // Get the elements
var decreaseBtn = document.querySelector('.decrease-btn');
var increaseBtn = document.querySelector('.increase-btn');
var quantityInput = document.querySelector('.quantity-input');

// Add event listeners
decreaseBtn.addEventListener('click', decreaseQuantity);
increaseBtn.addEventListener('click', increaseQuantity);

// Functions for increasing and decreasing the quantity
function decreaseQuantity() {
  var currentValue = parseInt(quantityInput.value);
  if (currentValue > 1) {
    quantityInput.value = currentValue - 1;
  }
}

function increaseQuantity() {
  var currentValue = parseInt(quantityInput.value);
  quantityInput.value = currentValue + 1;
}

  </script> -->
    <?php
    include "include/footer.php"
    ?>
</body>

</html>