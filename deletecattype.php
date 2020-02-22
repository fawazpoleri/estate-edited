<?php
include "connect.php";     
$del = $_GET['id'];

$query1 = mysqli_query($con,"DELETE  FROM catagory_name WHERE cat_id='$del'");

header("location:addcatagory.php");
?>

