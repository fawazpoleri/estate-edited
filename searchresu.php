<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
require_once('connect.php'); 


?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Land mark</title>
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

        
   

    <link rel="stylesheet" type="text/css" href="css/example.css " media="all";>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <a class="nav-link" href="adminhome.php">Home
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
                            <a class="nav-link" href="adminviewuser.php">Manage Users</a>
                        </li>
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="">View Plot</a>                          <!-- to do  -->
                        </li>
                         <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="adddistrict.php">MANAGE LOCATION</a>
                        </li>
                        <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="">ADD CATAGORY</a>
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
                <h3 class="home-banner-w3"> </h3>
                <br>
                 <!-- search section -->

                 
                <br>
                <?php
    $query = $_GET['property']; 
    $city = $_GET['city'];
    // gets value sent over search form
     
    $min_length = 0;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
       // $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        //$query = mysqli_real_escape_string($con,$query);
        // makes sure nobody uses SQL injection
         
         
           
    

        $results = $con->query("SELECT * FROM property WHERE catagory_id LIKE '$query' and city_id LIKE '$city'");
             
            while($rows = $results->fetch_assoc() ){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
           
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
                
                <br>
                
                <div class="row col-md-6">
                   
                  
                  
                  
                  <br><br><br><br><br>
            </div>
        </div>
        <!-- //banner text -->
    </section>
    <!-- //banner -->
    <!-- about-->








    <!-- //blog -->
    <!-- footer -->

    <!-- // register -->
    <!-- js -->
    <script src="js1/jquery-2.2.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- //js -->
    <!-- ajaxjs -->
    <script>
       
</script>
<!--ajax end-->
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