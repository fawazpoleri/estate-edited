<?php
require_once 'connect.php';  



if(isset($_POST['search'])) {
    $property=$_POST['property'];
    $city=$_POST['city'];
    $query"select * from property";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) > 0)
    {
      while ($rows = mysqli_fetch_array($result))
      {
        $property_type = $rows['property_type'];
        $lname = $rows['lname'];
        $city_id = $rows['city_id'];
      }  



    
   

}?>