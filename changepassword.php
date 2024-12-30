<?php

include "connection.php";
include "include/header.php";
// include "include/sidebar.php";


if (!empty($_POST))
{
  $email= $_SESSION['emailid']; 
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die ();
  $op = $_POST['oldpass'];
  $np = $_POST['newpass'];
  $cnp = $_POST['cnewpass'];
  if ($np==$cnp) {
   
    $query = "SELECT `id`, `username`, `password` FROM `users` WHERE `email` = '$email'";
   $data = mysqli_query($con, $query);
   $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
    
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
    // die ();
    // $count = mysqli_num_rows($result1);
    //  echo $count;
    //  echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // die ();
    foreach ($result as $value) {
      if ($value['password']==$op) {
      $query = "UPDATE `users` SET `password`='$np'" ;
      mysqli_query ($con,$query);
      echo " Password Updated Successfully";
    }

    else {
      echo "Old password does not match";
    }
    }

   
  }

  else {
    echo "New password and confirm password does not match!";
  }
}

?>






<body>



<div class="row container-fluid mt-5" style="margin-left:100px;">
    <div class="col-2">
        
    </div>

    <div class="col-10">

        <div class="container-fluid">
<div class="row pad-botm">
<div class="col-md-12">
<h4 class="header-line">User Change Password</h4>
</div>
</div>
    
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<div class="panel panel-info">

<div class="panel-body">





<form role="form" method="post" route="">

<div class="form-group">
<label>Current Password</label>
<input class="form-control" type="text" name="oldpass" autocomplete="off" required  />
</div>

<div class="form-group">
<label>Enter Password</label>
<input class="form-control" type="text" name="newpass" autocomplete="off" required  />
</div>

<div class="form-group">
<label>Confirm Password </label>
<input class="form-control"  type="text" name="cnewpass" autocomplete="off" required  />
</div>

 <button  name="change" class="btn btn-info">Change </button> 
</form>
 </div>
</div>
</div>
</div>  


<?php

include "include/footer.php";
?>