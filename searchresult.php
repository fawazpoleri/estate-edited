<?php
    require_once 'connect.php';
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
    $query = $_GET['property']; 
    $city = $_GET['city'];
    
     
         

        $results = $con->query("SELECT * FROM property WHERE catagory_id LIKE '$query'"); 
             
            while($rows = $results->fetch_assoc() ){
            
             
           
                echo "<p><h3>".$rows['pro_name']."</h3></p>";
                echo "<p><h3>".$rows['pcost']."</h3></p>";
                echo "<p><h3>".$rows['cat_name']."</h3></p>";
                echo "<p><h3>".$rows['city_name']."</h3></p>";
               
               
               
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
        
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ";
    }
?>
</body>
</html>