
<?php
        include "connect.php";
/*       session_start();

if (!isset($_SESSION['usertype'])) {

  header("location: login.php");
}*/

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <
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
     </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#state").change(function(){
                var state_id=$(this).val();
                $.ajax({
                    url:"action.php",
                    method:"POST",
                    data:{stateID:state_id},
                    success:function(data){
                        $("#city").html(data);
                    }
                });
            });
        });
    </script>

    <!-- Custom Theme files -->
    <link href="css2/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css2/style.css" type="text/css" rel="stylesheet" media="all">
            <link href="search.css" type="text/css" rel="stylesheet" media="all">

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
                            <a class="nav-link" href="customerhome.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                       
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="viewprofile.php">View Profile</a>
                        </li>
                          <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="post1.php">New Post</a>
                        </li>
                         <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="mypost.php">My Post</a>
                        </li>
                         <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="user_notification.php">Notification</a>
                        </li>
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>


            </nav>
          <br> <br> <br> <br> <br> <br> <br> <br> <br> <font color="white"> <h1><marquee direction="left">FIND YOUR PROPERTY</marquee></h1> </font><br> <br> <br> <br> <br> <br> <br> <br>
            <section class="search-sec">
    <div class="container">
        <form action="searchtest.php" method="GET" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                         <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" name="property">
                                <option>--Property--</option>
                            <?php 
                            $resultproperty =mysqli_query($con,"SELECT * from catagory_name");
                        while($rows=mysqli_fetch_assoc($resultproperty))
                        {
                            $propertytype = $rows['cat_name'];
                        ?>
                        <option value="<?php echo $rows['cat_id'];?>"><?php echo $propertytype; ?></option>
                        <?php
                        }
                        ?>
                            </select>
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="state" name="state">
                               <option>--state--</option>
                                <?php 
                                $result =mysqli_query($con,"SELECT * FROM state ORDER BY state_name");
                       while ($rows = $result->fetch_assoc())
                       {
                       $state_name = $rows[ 'state_name' ];
                       $state_id = $rows[ 'state_id' ];
                        ?>
                        <option value="<?php echo $state_id; ?>"><?php echo $state_name; ?></option>
                        <?php } ?>

                               </select>
                        </div>
                        
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="city"name="city">
                                <option>----city----</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="submit" id="search" value="search" name="search" class="btn btn-danger wrn-btn" margin="auto" >
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>   
        </header>

        <!-- //header -->
        <!-- banner text -->
        <div class="container">
            <div class="banner_text_wthree_pvt text-center">
                <h3 class="home-banner-w3"> </h3>
                
            </div>
        </div>
        <!-- //banner text -->
    </section>

    <section class="single_grid_w3_main align-w3" id="about">
        <div class="container">
              

                   
<CENTER><h1>PROPERTIES</h1></CENTER>
    <!-- //banner -->
    <!-- about--> <?php
                                            

                        $sql="SELECT * FROM property WHERE status='1'";

                        $result=mysqli_query($con,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                       while($rows=mysqli_fetch_array($result))
                   {
                        ?>
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn bg-theme mt-4 wthree-link-bnr" ><?php  echo $rows[11]?>
                        </a>
            <div class="row pt-md-4">
                <div class="col-lg-6">

               <center> <td><img src="<?php echo $rows[6]?>" width="350" height="350"></td></center>
<br><br>
                </div>
                
                <div class="col-lg-6">
                    <div class="single_grid_text">
                        <h4><td><?php echo $rows[7]?></td></h4>
                            <span class="wthree-line"></span>
                            Posted on:<?php echo $rows[8]?>
                       <p>Description:<?php echo $rows[2]?></p>
                     <tr> <td>Posted by:</td> <td> <a href=""><?php echo $rows[9]?></a></td></tr><br>
                     <tr> <td>   <a class="btn bg-theme1 mt-4 wthree-link-bnr" href="view.php?id=<?php echo $rows[9]?>"><?php echo $rows[5]?>
                        </a></td></tr><br>

                    </div>
                </div>
            </div>
           
             
               
            </div>
            
    </section>
    <?php
}
            }
            ?>
    <!-- //about -->
    <!-- explore-->
  


    <!-- //blog -->
    <!-- footer -->

    <!-- // register -->
    <!-- js -->
    <script src="js1/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- explore responsive slider -->
    <script src="js1/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $(".slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav:false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="js1/move-top.js"></script>
    <script src="js1/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js1/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js1/bootstrap.js"></script>
</body>

</html>