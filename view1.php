<?php

        include "connect.php";
        session_start();
         $user=$_SESSION['id'];
         
    


if($_POST)
{
 $pro=$_POST['intr'];

    mysqli_query($con,"INSERT INTO feedback(intrest,username) VALUES('$pro','$user')");
  
}
header("location:customerhome.php");
?>