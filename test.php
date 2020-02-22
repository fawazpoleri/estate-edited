<?php
require_once 'connect.php';
//search code
//error_reporting(0);
if($_REQUEST['search']){
$search = $_POST['search'];

if(empty($search)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM data WHERE name LIKE '%$search%'";
	$result = mysqli_query($con,$sele);
	
	if($make = mysqli_num_rows($result) > 0){
		while($row = mysql_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['property_type'];
		echo '<br> name						: '.$row['city_id'];
		echo '</h4>';
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysql_free_result($result);
mysql_close($con);
}
}

?>