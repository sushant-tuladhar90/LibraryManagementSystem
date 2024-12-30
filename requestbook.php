<?php
include "connection.php";
session_start();
if(!empty($_SESSION['emailid']))
{
  
 

if($_GET['id']){


$bookid=$_GET['id'];
$email =$_SESSION['emailid'];
$sql1 ="SELECT `id`, `username`, `email`, `password` FROM `users` WHERE email = '$email'";
$data = mysqli_query($con,$sql1);
$user =mysqli_fetch_assoc($data);
$userid =$user['id'];
date_default_timezone_set('Asia/Kathmandu');
        $date = date('y-m-d h:i:s');


$sql ="INSERT INTO `request_book`(`user_id`, `book_id`,`order_date`) VALUES ('$userid','$bookid','$date')";
 mysqli_query($con,$sql);
 $_SESSION['message'] ="You have successfully requested .";

 header("location:viewallbook.php");

}
}

?>