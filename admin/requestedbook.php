<?php
include "../connection.php";

$sql = "SELECT * FROM request_book ORDER BY id ASC";
$data = mysqli_query($con, $sql);
$result = mysqli_fetch_all($data, MYSQLI_ASSOC);

include "include/header.php";
include "include/main-sidebar.php";

// Check if the search button is clicked
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    // Modify the SQL query to include the search term
    $sql = "SELECT * FROM request_book WHERE username LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id ASC";
    $data = mysqli_query($con, $sql);
    $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
}
?>
<link rel="stylesheet" href="style.css">
<div class="content-wrapper" style="min-height: 0px !important ;">
    <section class="content">
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <div class="scrollable" style="height: 600px;
    width: 1250px;
    overflow: scroll;">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col"> ID</th>
                        <th scope="col">Member Name</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Book Order Date</th>

                        <th scope="col">Approval</th>
                        <th scope="col">Issued Status</th>


                    </tr>
                </thead>
                <tbody>
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



                        <tr>
                            <th scope="row"><?php echo $i++; ?></th>
                            <!-- <td><?php echo $result['']; ?></td> -->
                            <td><?php echo $result['username']; ?></td>
                            <td><?php echo $result1["bookname"]; ?></td>
                            <td><?php echo $value["order_date"]; ?></td>


                            <!-- <td>
                                    <?php
                                    if ($value['status'] == 0) { ?>
                                      <span class="badge badge-warning">pending</span>
                                     <?php }
                                        ?>
                                </td>                       -->
                            <td>

                                <!-- Button trigger modal -->
                                <?php
                                if ($value['status'] == 0) { ?>
                                    <a href="approved.php?status=1&id=<?php echo $value['id']; ?>&bookid=<?php echo $idn; ?>" type="button" class="btn btn-primary">
                                        Approve
                                    </a>
                                    <a href="approved.php?status=2&id=<?php echo $value['id'];  ?>" type="button" class="btn btn-warning">
                                        Reject
                                    </a>
                                <?php } else if ($value['status'] == 1) {
                                ?>
                                    <a href="" type="button" class="btn  btn-success" data-toggle="modal" data-target="#exampleModal-">
                                        Approved
                                    </a>
                                    <button disabled href="" type="button" class="btn btn-danger">
                                        Reject
                                    </button>
                                <?php } else if ($value['status'] == 2) { ?>
                                    <button disabled type="button" class="btn  btn-success" data-toggle="modal" data-target="#exampleModal-">
                                        Approve
                                    </button>
                                    <button disabled type="button" class="btn btn-danger">
                                        Rejected
                                    </button>
                            </td>
                        <?php } ?>

                        <td>
                            <?php
                            if ($value['status'] == 1) {
                                if ($value['issued_status'] == 0) {
                            ?>

                                    <a href="approved.php?issued_status=1&id=<?php echo $value['id']; ?>&bookid=<?php echo $idn; ?>" class="btn btn-info">not issued</a>
                                <?php
                                } else {
                                ?>
                                    <button type="button" class="btn  btn-success" data-toggle="modal" data-target="#exampleModal-">
                                        Issued
                                    </button>
                            <?php }
                            } ?>

                        </td>






                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </section>
</div>

<?php
include "include/footer.php";
?>