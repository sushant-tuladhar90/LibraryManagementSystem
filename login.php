<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        body {
            background-color: #dfe3ee;
        }
        
        .container {
            position: absolute;
            top: 50%;
            right: 100px;
            transform: translateY(-50%);
            width: 400px;
            height: 350px;
            border-radius: 12px;
            background-color: transparent;
            text-align: center;
        }
        
        .form {
            background-color: transparent;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .form input {
            margin-top: 10px;
            border-radius: 8px;
            padding: 17px;
            width: 332px;
        }
        
        button {
            margin-top: 15px;
            background-color: #1b9c24;
            padding: 16px;
            width: 100%;
            border-radius: 8px;
            color: white;
            font-family: sans-serif;
            font-size: 18px;
        }
        
        p {
            font-size: 16px;
            color: #1b9c24;
            margin-top: 10px;
        }
        
        p a {
            color: rgb(255, 255, 255);
        }
        
        .textbox {
            position: absolute;
            top: 50%;
            left: 100px;
            transform: translateY(-50%);
            text-align: center;
        }
        
        h1 {
            font-size: 55px;
            color: #1b9c24;
            font-family: sans-serif;
            margin-bottom: 20px;
        }
        
        h2 {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 28px;
            font-weight: normal;
            line-height: 32px;
            width: 500px;
            margin: 0 auto;
            color: white;
        }
        
        .btn {
            padding: 7px;
            margin-top: 15px;
            margin-left: 60px;
            margin-right: 60px;
        }
        
        .btn button {
            background-color: rgb(37, 90, 225);
        }
        
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }
        
        .background img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 1;
        }
    </style>
    
</head>
<body>
<?php
include "connection.php";
session_start();
if(!empty($_SESSION['email'])){
  header('location:user_dashboard.php');
}
if (isset ($_POST['login']))
{
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    // $username=$_POST['username'];
    $email = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE email='$email' AND password = '$password' ";
    $data = mysqli_query($con, $sql);
    $table=mysqli_num_rows($data);
    echo $table;
    
    if($table == 1)
    {
        session_start();
        $_SESSION['emailid']=$email ;
        header("location:user_dashboard.php");

    }else {
        echo "Something went wrong";
    }
}
?>
    <div class="background">
        <img src="background.jpg">
    </div>
    <div class="textbox">
        <h1>BookQuest</h1>
        <h2>Where Books Come to Life,<br> and Libraries Thrive.</h2>
    </div>
   
    <div class="container">
        <div class="form">
            <form action="" method="POST">
                <input type="text" class="text" name="username" placeholder="Enter Your Email" required><br>
                <input type="password" class="text" name="password" placeholder="Password" required><br>
                <button type="submit" name="login">Log In</button>
                <p> Don't have an account? <a href = "signup.php"> Register Now</a><br></p>
                
                
            </form>
        </div>
    </div>
</body>
</html>
