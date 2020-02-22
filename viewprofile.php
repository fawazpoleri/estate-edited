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
                <h1><marquee direction="left">View My Profile</marquee></h1></div>
                <h3 class="home-banner-w3"> </h3>
              
                
            </div>
        </div>
        <!-- //banner text -->
    </section>
    <!-- //banner -->
    <!-- about-->

<div id="back" align="right">
    <a href="adminhome.html"><H3><font color="black">Back</font></H3></a>
</div>
<br><br>
<!--<h1><marquee direction="left">View Users</marquee></h1><br>-->
<form method="post" id="view" >
    <table class="table table-hover" border="2" align="center">
        <tr>
            <th>&nbsp;&nbsp;Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
           
            <th>&nbsp;&nbsp;Name&nbsp;&nbsp;</th>
            
           <th>&nbsp;&nbsp;User Name&nbsp;&nbsp;</th>
            
            <th>&nbsp;&nbsp;Email&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Address&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;Phone Number&nbsp;&nbsp;</th>
            
             <th>&nbsp;&nbsp;Password&nbsp;&nbsp;</th>
             
            
            
            <th>&nbsp;&nbsp;Delete&nbsp;&nbsp;</th>
        </tr>
        <?php
        require("connect.php");
        $result=mysqli_query($con,"select *  from register where username='$user'");
            
        if(mysqli_num_rows($result) >0)
        {

            while($row1=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row1[0];?></td>
                    <td><?php echo $row1[1];?></td>
                    <td><?php echo $row1[2];?></td>
                    <td><?php echo $row1[3];?></td>
                    <td><?php echo $row1[4];?></td>
                    <td><?php echo $row1[5];?></td>
                   <td><?php echo $row1[6];?></td>
               <td><font color="yellow"><a href="updateprofile.php?id=<?php echo $row1[0]?>&mode=edit">edit</font></td> 
                </tr>
                <?php
            }
                
        }
        //else
        //{
        //  echo '<span style="color:#FF0000;"><center>NO REQUESTS FOUND !</center></br></br></span>';
        //}
        
        ?>
    </table>


    </br>

    </br></br></br></br></br></br></br></br></br></br></br>

</form>

</body>
</html>







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