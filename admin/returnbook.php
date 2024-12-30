<?php
include "../connection.php";
session_start();


if ($_GET['issued_status']) {

    $id = $_GET['id'];
    if ($_GET['issued_status'] == 1) {
        $sql = "UPDATE `request_book` SET `return_status`='1' WHERE `id` = '$id'";
        mysqli_query($con, $sql);
        header("location:currentlyissuedbook.php");
    }

    $bookid = $_GET['bookid'];

    $sql1 = "SELECT `id`, `bookname`, `bookauthor`, `bookpublication`, `quantity`, `image` FROM `addbook` WHERE `id`='$bookid'";

    $data = mysqli_query($con, $sql1);
    $result = mysqli_fetch_assoc($data);

    $qty = $result['quantity'];

    $qty = $qty + 1;
    $sql2 = "UPDATE `addbook` SET `quantity`='$qty' WHERE `id`='$bookid'";
    $data = mysqli_query($con, $sql2);
    header("location:currentlyissuedbook.php");
}

if ($_GET['return_status']==1){
    $id = $_GET['id'];

    
}