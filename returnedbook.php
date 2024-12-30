<?php
include "connection.php";
include "include/header.php";


if (!empty($_SESSION['emailid'])) {
    $email = $_SESSION['emailid'];
    $sql = "SELECT `id`, `username`, `email`, `password` FROM `users` WHERE `email` = '$email'";
    $data = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($data);



    $id = $result['id'];


    $requestsql = "SELECT `id`, `user_id`, `book_id`, `order_date`, `status`, `issued_status`, `issued_date`, `return_date`, `return_status` FROM `request_book` WHERE `return_status` = '1' AND `user_id`='$id' ";
    $data1 = mysqli_query($con, $requestsql);
    $result1 = mysqli_fetch_all($data1, MYSQLI_ASSOC);
}



// Check if the search button is clicked
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    // Modify the SQL query to include the search term
    $sql55 = "SELECT * FROM addbook WHERE username LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id DESC";
    $data55 = mysqli_query($con, $sql);
    $result55 = mysqli_fetch_all($data, MYSQLI_ASSOC);
}
?>







<div class="row container-fluid" style="margin-left:-30px;">
    <div class="col-2">
        <?php
        include "include/sidebar.php"

        ?>
    </div>

    <div class="col-10">



        <div class="container content-wrapper">
            <section class="content">

                <div class="card text-center table-responsive">
                    <div class="card-body">
                        <h3 class="text-center p-2">Returned Books</h3> <br>

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> ID</th>

                                    <th scope="col">Book Name</th>
                                    <th scope="col">Book Received Date</th>

                                    <th scope="col">Return Date</th>
                                    <th scope="col">Image</th>

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
                                        <td scope="row"><?php echo $value['id']; ?></td>
                                        <td><?php echo $rresult['bookname']; ?></td>
                                        <td><?php echo $value['issued_date']; ?></td>
                                        <td><?php echo $value['return_date']; ?></td>
                                        <td> <img src="admin/images/<?php echo $rresult['image']; ?>" height="50"> </td>

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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


<?php
include "include/footer.php"
?>
</body>

</html>