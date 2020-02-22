<?php
require("connect.php");
$del = $_GET['city_id'];

mysqli_query($con,"DELETE  from city where city_id='$del'");


header("location:adddistrict.php");
?>


<script>
    alert("Successfully Deleted the City");
    window.location="adddistrict.php";
</script>
