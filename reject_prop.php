
<?php
require("connect.php");
$app=$_GET['id'];

mysqli_query($con,"UPDATE property SET status='0' where pid='$app' ");




header("location:approve_property.php");
?>
