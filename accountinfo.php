<?php
include "connection.php";
include "include/header.php";

if (!empty($_SESSION['emailid'])) {
    $email = $_SESSION['emailid'];
    $sql = "SELECT `id`, `username`, `email`, `password` FROM `users` WHERE `email` = '$email'";
    $data = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($data);
}
if (isset($_POST['confirm'])) {
    // if (!empty($_POST)) {
    //     $password = $_POST['password'];

    //     $sql = "SELECT * FROM `users` WHERE password='$password' ";
    //     $query = mysqli_query($con, $sql);
    //     $result = mysqli_fetch_assoc($query);

    //     if (!empty($result['password'] == $password)) {

    //         $sql = "UPDATE `users` SET `password`='$password'";
    //         mysqli_query($con, $sql);
    //     } else {
    //         echo "Old Password does not match";
    //         header("location:accountinfo.php");
    //     }
    // }

    $currentpassword = $_POST['currentpassword'];
    $password = $_POST['password'];
    $passwordConfirm=$_POST['passwordConfirm'];

    $sql = "SELECT password from users where email='$email'";
    $res = mysqli_query($con,$sql);
      $res=mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($res);
       if(password_verify($currentPassword,$row['password'])){
if($passwordConfirm ==''){
            $error[] = 'Please confirm the password.';
        }
        if($password != $passwordConfirm){
            $error[] = 'Passwords do not match.';
        }
          if(strlen($password)<5){ // min 
            $error[] = 'The password is 6 characters long.';
        }
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
if(!isset($error))
{
      $options = array("cost"=>4);
    $password = password_hash($password,PASSWORD_BCRYPT,$options);

     $result = mysqli_query($dbc,"UPDATE users SET password='$password' WHERE email='$email'");
           if($result)
           {
       header("location:account.php?password_updated=1");
           }
           else 
           {
            $error[]='Something went wrong';
           }
}

        } 
        else 
        {
            $error[]='Current password does not match.'; 
        }   
    }
        if(isset($error)){ 

foreach($error as $error){ 
  echo '<p class="errmsg">'.$error.'</p>'; 
}
}
        ?> 


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
        include "include/sidebar.php"
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
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email:</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $result['email'] ?>
                                </div>
                            </div>
                            <hr>

                            <hr>
                            <div class="row">


                                <!-- Button trigger modal -->
                                <a type="button" class="btn btn-info col-sm-12 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Update Password
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Password</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>


                                            <div class="modal-body ml-2 mt-2">
                                                <form action="" method="post">
                                                    <?php

                                                    ?>
                                                    Current Password: &nbsp;&nbsp;<input type="text" name="currentpassword"><br><br>

                                                    New Password: &nbsp;&nbsp;<input type="text" name="password"><br><br>

                                                    Confirm Password: &nbsp;&nbsp;<input type="text" name="passwordConfirm">

                                                
                                                    <br>
                                                    <button class="btn btn-sm btn-primary float-end" name="confirm">Confirm</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>

    </div>
</div>