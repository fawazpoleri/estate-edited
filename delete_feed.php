<?php
require("connect.php");
if($_GET['delete'])
{}
$del = $_GET['id'];



mysqli_query($con,"DELETE FROM feedback WHERE id='$del'");


	}
            
header("location:notification.php");
?>


