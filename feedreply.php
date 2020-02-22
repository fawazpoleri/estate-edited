

<?php
require("connect.php");

if(isset(_GET['reply']))
{
	$id=$_GET['id'];
	$message=$_GET['message'];
	mysqli_query($con,"UPDATE feedback SET message='$message'  WHERE id='$id' ");




}
header("location:notification.php");
?>
