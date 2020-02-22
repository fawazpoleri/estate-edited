<?php


   require('connect.php');


   $sql = "SELECT * FROM city WHERE state_id LIKE '%".$_GET['id']."%'"; 


   $result = $mysqli->query($con,$sql);


   $json = [];
   while($row = $result->fetch_assoc()){
        $json[$row['id']] = $row['name'];
   }


   echo json_encode($json);
?>