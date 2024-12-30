<?php
include "../connection.php";
include "include/header.php";
include "include/main-sidebar.php";

$sql = "SELECT `id`, `user_id`, `book_id`, `order_date`, `status`, `issued_status`, `issued_date` ,`return_date`FROM `request_book` WHERE `return_status` = '0' ORDER BY id DESC ";
$data = mysqli_query($con, $sql);
$result = mysqli_fetch_all($data, MYSQLI_ASSOC);






// Check if the search button is clicked
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    // Modify the SQL query to include the search term
    $sql = "SELECT * FROM request_book WHERE username LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id ASC";
    $data = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
}
?>



<div class="content-wrapper">
    <section class="content">
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>

        <link rel="stylesheet" href="style.css">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="scrollable">
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th scope="col"> ID</th>
                                    <th scope="col">Member Name</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Book Issued Date</th>

                                    <th scope="col">Return Date</th>
                                    <th scope="col">Return</th>



                                </tr>
                            </thead>
                            <?php
                            $i = 1;
                            foreach ($result as $key => $value) {
                                $id = $value["user_id"];
                                $sql = "SELECT `id`, `username`, `email`, `password` FROM `users` WHERE `id`='$id'";
                                $data = mysqli_query($con, $sql);
                                $result = mysqli_fetch_assoc($data);


                                $idn = $value["book_id"];
                                $sql1 = "SELECT `id`, `bookname`, `bookauthor`, `bookpublication`, `quantity`, `image` FROM `addbook` WHERE `id` =  '$idn' ";
                                $data1 = mysqli_query($con, $sql1);
                                $result1 = mysqli_fetch_assoc($data1);


                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $value["id"]; ?></td>
                                        <td><?php echo $result['username']; ?></td>
                                        <td><?php echo $result1["bookname"]; ?></td>
                                        <td><?php echo $value["issued_date"]; ?></td>
                                        <td><?php echo $value["return_date"]; ?></td>

                                        <td><a href="returnbook.php?issued_status=1&id=<?php echo $value['id']; ?>&bookid=<?php echo $idn; ?>&user  id=<?php echo $id; ?>" class="btn btn-success">Return</a></td>
                                    </tr>

                                <?php
                            } ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>



    </section>
</div>

<?php
include "include/footer.php";
?>