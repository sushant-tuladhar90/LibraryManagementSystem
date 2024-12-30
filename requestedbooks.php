<?php
include "connection.php";
include "include/header.php";



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





<div class="row container-fluid" style="margin-left:-30px;">
  <div class="col-2">
    <?php
    include "include/sidebar.php"

    ?>
  </div>

  <div class="col-10">


    <div class="content-wrapper">
      <section class="content">
        <!-- <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
            </form>
        </nav> -->
        <?php
        if (!empty($_SESSION['emailid'])) {
          $email = $_SESSION['emailid'];
          $sql = "SELECT `id`, `username`, `email`, `password` FROM `users` WHERE `email` = '$email'";
          $data = mysqli_query($con, $sql);
          $result = mysqli_fetch_assoc($data);

          // print_r($result);
          // die();

          $id = $result['id'];

          $requestsql = "SELECT `id`, `user_id`, `book_id`, `order_date`, `status`, `issued_status`, `issued_date`, `return_date` FROM `request_book` WHERE `user_id` = '$id' ";
          $data1 = mysqli_query($con, $requestsql);
          $result1 = mysqli_fetch_all($data1, MYSQLI_ASSOC);
        }


        ?>
        <div class="card text-center div-scroll">
          <div class="card-body">
            <h3 class="text-center p-2">Requested Books</h3> <br>
            <table class="table caption-top">

              <thead>
                <tr>
                  <th scope="col">S.N</th>
                  <th scope="col">Book Name</th>
                  <th scope="col">Book Author</th>
                  <th scope="col">Book Publication</th>

                  <th scope="col">Image</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 1;
                foreach ($result1 as $key => $value) {
                  $bookid = $value['book_id'];
                  $requestedsql = "SELECT `id`, `bookname`, `bookauthor`, `bookpublication`, `quantity`, `image` FROM `addbook` WHERE `id`='$bookid'";
                  $rdata = mysqli_query($con, $requestedsql);
                  $rresult = mysqli_fetch_assoc($rdata);



                ?>
                  <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <!-- <td><?php echo $value['id']; ?></td> -->
                    <td><?php echo $rresult['bookname']; ?></td>
                    <td><?php echo $rresult['bookauthor']; ?></td>
                    <td><?php echo $rresult['bookpublication']; ?></td>

                    <td>
                      <img src="admin/images/<?php echo $rresult['image']; ?>" height="50">
                    </td>
                    <td>
                      <?php
                      if ($value['status'] == 0) { ?>
                        <span class="badge bg-warning text-dark">Pending</span>
                      <?php  } elseif ($value['status'] == 1) { ?>
                        <span class="badge bg-success ">Approved</span>

                      <?php } else { ?>

                        <span class="badge bg-danger ">Rejected </span>

                      <?php } ?>
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
  include "include/footer.php";
  ?>
  </body>

  </html>