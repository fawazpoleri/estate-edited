

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Land Mark</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <script>
    
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css2/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css2/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css2/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts1.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

         <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <section class="banner d-flex flex-column justify-content-center align-items-center">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        LAND MARK
                    </a>
                </h1>
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="adminhome.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                       
                         <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="Approve_property.php">APPROVE PROPERTY</a>
                        </li>
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="index.html">Logout</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- //header -->
        <!-- banner text -->
        <div class="container">
            <div class="banner_text_wthree_pvt text-center">
                <div class="container text-white">
                <!--<h1><marquee direction="left">View My Profile</marquee></h1></div>-->
                <h3 class="home-banner-w3"> </h3>
              
                
            </div>
        </div>
        <!-- //banner text -->
    </section>
    <!-- //banner -->
    <!-- about-->

<div id="back" align="right">
    <a href="index.html"><H3><font color="black">Back</font></H3></a>
</div>
<br><br>

                                                                         <!--  tab bar section -->

<form method="post" id="view" >

<div class="container">
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">BUY</a></li>
    <li><a data-toggle="tab" href="#menu1">RENT</a></li>
    <li><a data-toggle="tab" href="#menu2">LEASE </a></li>
   
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     


      <?php
        require("connect.php");
        
        $result=mysqli_query($con,"select *  from property where property_catagory='Buy' and status='1'");
            
        if(mysqli_num_rows($result) >0)
        {

            while($row1=mysqli_fetch_array($result)){
                ?>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn bg-theme mt-4 wthree-link-bnr" ><?php  echo $row1[11]?>
                        </a>

            <div class="row pt-md-4">
                <div class="col-lg-6">

               <center> <td><img src="<?php echo $row1[6]?>" width="350" height="350"></td></center>
<br><br>
                </div>
                
                <div class="col-lg-6">
                    <div class="single_grid_text">
                        <h4><td><?php echo $row1[7]?></td></h4>  
                            <span class="wthree-line"></span>
                            Posted on:<?php echo $row1[8]?>
                       <p>Description:<?php echo $row1[2]?></p>
                     <tr> <td>Posted by:</td> <td> <a href=""><?php echo $row1[9]?></a></td></tr><br>
                     <tr> <td> <a class="btn bg-theme1 mt-4 wthree-link-bnr" href="view.php?id=<?php echo $row1[9]?>"><?php echo $row1[5]?>
                        </a></td></tr><br>
                        

                    </div>
                </div>
            </div>         
          
               
            
    </section>
    <?php
}
            }
            ?>





    </div>
    <div id="menu1" class="tab-pane fade">
     


 <?php
        require("connect.php");
        
        $result=mysqli_query($con,"select *  from property where property_catagory='Rent' and status='1'");
            
        if(mysqli_num_rows($result) >0)
        {

            while($row1=mysqli_fetch_array($result)){
                ?>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn bg-theme mt-4 wthree-link-bnr" ><?php  echo $row1[11]?>
                        </a>

            <div class="row pt-md-4">
                <div class="col-lg-6">

               <center> <td><img src="<?php echo $row1[6]?>" width="350" height="350"></td></center>
<br><br>
                </div>
                
                <div class="col-lg-6">
                    <div class="single_grid_text">
                        <h4><td><?php echo $row1[7]?></td></h4>  
                            <span class="wthree-line"></span>
                            Posted on:<?php echo $row1[8]?>
                       <p>Description:<?php echo $row1[2]?></p>
                     <tr> <td>Posted by:</td> <td> <a href=""><?php echo $row1[9]?></a></td></tr><br>
                     <tr> <td> <a class="btn bg-theme1 mt-4 wthree-link-bnr" href="view.php?id=<?php echo $row1[9]?>"><?php echo $row1[5]?>
                        </a></td></tr><br>
                        

                    </div>
                </div>
            </div>         
          
               
            
    </section>
    <?php
}
            }
            ?>




    </div>
    <div id="menu2" class="tab-pane fade">
     


        <?php
        require("connect.php");
        
        $result=mysqli_query($con,"SELECT *  FROM property WHERE property_catagory='Lease' and status='1'");
            
        if(mysqli_num_rows($result) >0)
        {

            while($row1=mysqli_fetch_array($result)){
                ?>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn bg-theme mt-4 wthree-link-bnr" ><?php  echo $row1[11]?>
                        </a>

            <div class="row pt-md-4">
                <div class="col-lg-6">

               <center> <td><img src="<?php echo $row1[6]?>" width="350" height="350"></td></center>
<br><br>
                </div>
                
                <div class="col-lg-6">
                    <div class="single_grid_text">
                        <h4><td><?php echo $row1[7]?></td></h4>  
                            <span class="wthree-line"></span>
                            Posted on:<?php echo $row1[8]?>
                       <p>Description:<?php echo $row1[2]?></p>
                     <tr> <td>Posted by:</td> <td> <a href=""><?php echo $row1[9]?></a></td></tr><br>
                     <tr> <td> <a class="btn bg-theme1 mt-4 wthree-link-bnr" href="view.php?id=<?php echo $row1[9]?>"><?php echo $row1[5]?>
                        </a></td></tr><br>
                        

                    </div>
                </div>
            </div>         
          
               
            
    </section>
    <?php
}
            }
            ?>




    </div>
   
</div>

</form>




     

</body>
</html>





