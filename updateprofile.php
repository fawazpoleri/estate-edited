<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
        require("connect.php");
        session_start();
         $user=$_SESSION['id'];
         ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Teens Hub People Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Teens Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
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
                            <a class="nav-link" href="adminhome.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <!--<li class="nav-item  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="about.html">about

                            </a>
                        </li>
                        <li class="nav-item dropdown mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="gallery.html">gallery</a>
                                <a class="dropdown-item" href="about.html">team</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item scroll" href="#explore">explore</a>
                            </div>
                        </li>-->
                       <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="viewprofile.php">View Profile</a>
                        </li>
                          <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="post.html">New Post</a>
                        </li>
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="index.html">Logout</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
         <div class="container">
            <div class="banner_text_wthree_pvt text-center">
                <div class="container text-white">
                <h1><marquee direction="left">Update My Profile</marquee></h1></div>
                <h3 class="home-banner-w3"> </h3>
              
                
            </div>
        </div>
        <!-- //banner text -->
    </section>


<div id="back" align="right">
    <a href="donor.html"><H3><font color="black">Back</font></H3></a>
</div>

            <!-- top-nav -->
                          
     <br>
                <form action="update.php" method="POST" style="background-color:grey">
                    <table align="center" style="background-color:grey">

                        <?php
                        include 'connect.php';
                        

                        $id=$_GET['id'];

// Retrieve data from database
                        $sql="SELECT * FROM register WHERE id=$id";

                        $result=mysqli_query($con,$sql);
                        $rows=mysqli_fetch_array($result);
                        ?>
                        <div class="col-sm-2 col-sm-offset-4">
                            <div class="inputContainer">
                       <tr>
                        <td>Id :</td>

                        <td>
                            <input name="id" style="width:350px;"  class="form-control" type="text" value="<?php echo $rows['id']; ?>"></br>
                        </td></tr>
                         <tr>
                        <td>Name:</td>

                        <td>
                            <input name="name" style="width:350px;"  class="form-control" type="text" value="<?php echo $rows['name']; ?>"></br>
                        </td></tr>
                        <tr>
                        <td>Address:</td>

                        <td>
                            <input name="address" style="width:350px;"  class="form-control" type="text" value="<?php echo $rows['address']; ?>"></br>
                        </td></tr>
                        
                        
                        <tr>
                        <td>Username:</td>

                        <td>
                            <input name="username" style="width:350px;" type="text" class="form-control" value="<?php echo $rows['username']; ?>"></br>
                        </td>
                            </tr>
                            <tr>
                        <td>Email:</td>

                        <td>
                            <input name="email" style="width:350px;"  class="form-control" type="text" value="<?php echo $rows['email']; ?>"></br>
                        </td></tr>
                        <tr>
                        <td>Phone Number:</td>

                        <td>
                            <input name="phonenumber" style="width:350px;"  class="form-control" type="text" value="<?php echo $rows['phoneno']; ?>"></br>
                        </td></tr>
                        
                       
                      
                        <td>Password:</td>

                        <td>
                            <input name="password" style="width:350px;" type="text" class="form-control" value="<?php echo $rows['password']; ?>"><br>
                        </td></tr>
                      
                        
<td></td>
                            <td>
 <div class="col-lg-2 text-right">
                                            
        <button class="btn btn-primary" type="submit" name="Update" onclick="return Validate()">UPDATE</button>
                                        </div>
                                                           </table>

</center>
            </div>

</div>
</div>
</div>
</div>
</div></div></div></div>
<!-- smooth scrolling -->

</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="bottom_wthree">

</div>
</figure>
<div class="clearfix"></div>
</div>

<!-- smooth scrolling -->

</body>
</html>