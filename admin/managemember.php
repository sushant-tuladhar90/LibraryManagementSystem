<?php
include "../connection.php";

$sql = "SELECT * FROM users ORDER BY id DESC";
$data = mysqli_query($con, $sql);
$result = mysqli_fetch_all($data, MYSQLI_ASSOC);

include "include/header.php";
include "include/main-sidebar.php";

// Check if the search button is clicked
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    // Modify the SQL query to include the search term
    $sql = "SELECT * FROM users WHERE username LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id DESC";
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
        <div class="card">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($result as $key => $value) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i++; ?></th>
                                <td><?php echo $value['username']; ?></td>
                                <td><?php echo $value["email"]; ?></td>
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

<?php
include "include/footer.php";
?>