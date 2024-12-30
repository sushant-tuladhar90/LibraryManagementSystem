<?php
include "../connection.php";

$sql = "SELECT * FROM addbook ORDER BY id DESC";
$data = mysqli_query($con, $sql);
$result = mysqli_fetch_all($data, MYSQLI_ASSOC);

include "include/header.php";
include "include/main-sidebar.php";

// Check if the search button is clicked
if (isset($_GET['search'])) {
  $search = $_GET['search'];
  // Modify the SQL query to include the search term
  $sql = "SELECT * FROM addbook WHERE username LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id DESC";
  $data = mysqli_query($con, $sql);
  $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
}
?>



<div class="content-wrapper sushant" style="min-height: none;">
  <section class="content">
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
    <div class="card">
      <div class="card-body">
        <div class="scrollable">
          <table id="example1" class="table table-bordered table-striped" style="overflow: scroll;">
            <thead>
              <tr>
                <th scope="col">Book ID</th>
                <th scope="col">Book Name</th>
                <th scope="col">Book Author</th>
                <th scope="col">Book Publication</th>
                <th scope="col">Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">Details</th>

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
                    <img src="images/<?php echo $value['image']; ?>" height="50">
                  </td>
                  <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-<?php echo $value['id']; ?>">
                      <i class="fa fa-eye"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-<?php echo $value['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Book Details</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-7">
                                <p style="color:black"><u>Book Name:</u> &nbsp &nbsp<?php echo $value["bookname"]; ?></p>

                                <p style="color:black"><u>Book Authour:</u> &nbsp &nbsp<?php echo $value["bookauthor"] ?></p>
                                <p style="color:black"><u>Book Publisher:</u> &nbsp &nbsp<?php echo $value["bookpublication"] ?></p>
                                <p style="color:black"><u>Book Quantity:</u> &nbsp &nbsp<?php echo $value["quantity"] ?></p>

                              </div>

                              <div class="col-5">
                                <p style="color:black"> &nbsp; &nbsp; &nbsp;<u>Image: <br> <br> </u> &nbsp &nbsp <img src="images/<?php echo $value["image"] ?>" height="50"> </p>

                              </div>
                            </div>

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
    </div>
  </section>
</div>

<?php
include "include/footer.php";
?>