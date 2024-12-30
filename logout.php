<?php

session_start();
if (!empty($_SESSION['emailid']))
{
    
    unset($_SESSION['emailid']);

    header('location:home-1.php');
}


?>