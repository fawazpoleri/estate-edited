<?php
                        
                        include "connect.php";       
                        
                        if(isset($_POST['addcattype']))
                        {
                            $cat_type_name=$_POST['cattype'];
                            
                     
                            $sq=mysqli_query($con,"INSERT INTO catagory_type (catagory_type) values ('$cat_type_name')");
                           
                           
                           
                        }
                           

                        header("location:addcatagory.php");


                        ?>
