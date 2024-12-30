<?php
include "../connection.php";
include "include/header.php";

if (!empty($_SESSION['username'])) {
    $email = $_SESSION['username'];
    $sql = "SELECT `id`, `username`, `password` FROM `admin` WHERE `username` = '$email'";
    $data = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($data);
}


?>

<html>

<head>
    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<div class="row container-fluid" style="margin-left:-30px;">
    <div class="col-2">
        <?php
        include "include/main-sidebar.php"

        ?>
    </div>

    <div class="col-10">

        <div class="container-fluid">
            <div class="main-body">



                <div class="row gutters-sm">


                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo $result['username'] ?></h4>
                                    <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <br>
                                    <br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $result['username'] ?>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $result['email'] ?>
                                </div>
                            </div> -->


                        </div>
                    </div>
                </div>





            </div>
        </div>

    </div>
</div>