

<?php
                        
                        include "connect.php";       
                        
                        if(isset($_POST['addcatname']))
                        {
                            $cat_name=$_POST['catname'];
                            
                     
                            $sq=mysqli_query($con,"INSERT INTO catagory_name (cat_name) values ('$cat_name')");
                           
                           
                           
                        }
                           

                        header("location:addcatagory.php");


                        ?>                     