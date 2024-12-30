<?php
include "../connection.php";
session_start();
if(isset($_GET['issued_status']))
{
    
    $status = $_GET['issued_status'];
    $id=$_GET['id'];
      if($_GET['issued_status']==1)
      {
        date_default_timezone_set('Asia/Kathmandu');
        $date = date('y-m-d h:i:s');
        $returndate =  date('Y-m-d', strtotime($date. ' + 30 days'));
      
 
        $sql ="UPDATE `request_book` SET `issued_date`='$date',`issued_status`='$status', `return_date` = '$returndate' WHERE `id` = '$id'";
        mysqli_query($con,$sql);
        header("location:requestedbook.php");
      }
 } 

if(isset($_GET['status']))
{
    
    $status = $_GET['status'];
    $id=$_GET['id'];
      if($_GET['status']==2)
      {
        $sql ="UPDATE `request_book` SET `status`='$status' WHERE `id` = '$id'";
        mysqli_query($con,$sql);
        header("location:requestedbook.php");
      }

    $bookid = $_GET['bookid'];
   
    $sql1="SELECT `id`, `bookname`, `bookauthor`, `bookpublication`, `quantity`, `image` FROM `addbook` WHERE `id`='$bookid'";
   
    $data=mysqli_query($con,$sql1);
    $result =mysqli_fetch_assoc($data);
 
    $qty =$result['quantity'];
    if($qty>0)
    {
        $sql ="UPDATE `request_book` SET `status`='$status' WHERE `id` = '$id'";
        mysqli_query($con,$sql);
        $qty = $qty-1;
        $sql2="UPDATE `addbook` SET `quantity`='$qty' WHERE `id`='$bookid'";
        $data=mysqli_query($con,$sql2);
        header("location:requestedbook.php");

    }else{
      $_SESSION['bookmsg']="Book is not available";
      header("location:requestedbook.php");
    }

  


}