<?php
session_start();
include("connect.php");

       
        session_start();
         $user=$_SESSION['id'];
        
   
     



if($_POST)
{
$image=$_FILES['image']['name'];
$path= "images/photo/$image";            
$file_tmp_name=$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp_name,$path);
    $proname=$_POST['pname'];
    $property=$_POST['property'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $locn=$_POST['location'];
    $property_catagory=$_POST['property_catagory'];
    $dadate=$_POST['date'];
    $pdes=$_POST['des'];
    $parea=$_POST['area'];
    $proom=$_POST['room'];
    $pcost=$_POST['cost'];
    
    
   
    
    

 // $image=$_POST['image'];


// echo "INSERT INTO property (pro_name,pro_description,area,proom,pcost,image,loc,date,username,cat_id,property_catagory,city_id) values ( '$proname','$pdes','$parea','$proom','$pcost','$image','$locn',' $dadate','$user','$property','$property_catagory','$city')";
// exit();


     $sql="INSERT INTO property (pro_name,pro_description,area,proom,pcost,image,loc,date,username,cat_id,property_catagory,city_id) values ( '$proname','$pdes','$parea','$proom','$pcost','$image','$locn',' $dadate','$user','$property','$property_catagory','$city')";
     mysqli_query($con,$sql);
  


     
}
header("location:post1.php");

?>