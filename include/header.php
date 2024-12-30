<?php 
session_start();
if(empty($_SESSION['emailid']))
{
  header('location:home-1.php');
}

?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/sidebar.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Sacramento&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cardo&display=swap');
        

.logo{
    font-family: 'Sacramento', cursive;
    float: left;
}
.logo h1{
    color: #431c5d;
    font-size: 35px;
    font-weight: bolder;
}

  </style>

  </head>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>Library Management System</title>
    <style>
    

    </style>
</head>



<body >
<div style="background-color: #e6e9f0;" class="sticky-top">
 <a class="btn btn-outline logo p-0 m-0" href="user_dashboard.php" >
<div class="logo">
            <h1>BookQuest</h1>
        </div>
        </a>
    <div class="header text-center" style="font-size: 30px;"><h3> Library Management System </h3></div> 
    <br>
    </div>
    
    
    