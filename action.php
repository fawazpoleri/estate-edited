<?php
    require_once 'connect.php';
    $output='';
    $sql="SELECT * FROM city WHERE state_id='".$_POST['stateID']."' ORDER  BY city_name";
    $result=mysqli_query($con,$sql);
    $output .='<option value="">-Select city-</option>';
    while($row=mysqli_fetch_array($result)){
        $output .='<option value="'.$row["city_id"].'">'.$row["city_name"].'</option>';
    }
    echo $output;
?>
<?php
