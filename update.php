
<?php
include 'connect.php';
session_start();
$user=$_SESSION['id'];
       
        

if(isset($_POST))
{
        $id=$_POST["id"];

  $name = $_POST["name"];
$dob=$_POST["address"];
$uname = $_POST["username"];
$email = $_POST["email"];
$phno = $_POST["phonenumber"];


$pass = $_POST["password"];

  

$ins="UPDATE register SET name='$name',email='$email',phoneno='$phno',username='$uname',password='$pass',address='$dob' WHERE id='$id'";

            
                       $result=mysqli_query($con,$ins);
                       if($ins){
                       	$ee="select id from login where username='$user'";
                       	$eee=mysqli_query($con,$ee);

if(mysqli_num_rows($eee) >0)
        {

            while($row1=mysqli_fetch_array($eee)){
            	$ii=$row1['id'];
                


                       $ss="UPDATE login SET username='$uname',password='$pass' WHERE usertype='user' and id='$ii'";
                       $result1=mysqli_query($con,$ss);
                       
                       }
                   }
               }

    ?>
 <script type="text/javascript">
            alert("Update Successfully");
            window.location="viewprofile.php";
        </script>
       
<?php
}
?>
