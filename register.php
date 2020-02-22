<?php
include 'connect.php';
session_start();
 if($_POST)
    {
    $name=$_POST["name"];     
 $uname=$_POST["uname"];
$email = $_POST["email"];
$ad=$_POST["add"];
$ph = $_POST["phno"];
$pass = $_POST["password"];
$cpass = $_POST["cpassword"];

$sq="insert into register(name,username,email,address,phoneno,password,cpassword)values('$name','$uname','$email','$ad','$ph','$pass','$cpass')";
$e=mysqli_query($con,$sq);
}
if($e)
{
    $type='user';
    $uname = $_POST["uname"];
    $password=$_POST["password"];
    $q="insert into login(usertype,username,password)values('$type','$uname','$password')";
    mysqli_query($con,$q);

        }

    ?>
<script>
    alert("Successfully Registered");
    window.location="login.php";
</script>
