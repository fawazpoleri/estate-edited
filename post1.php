<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 

include('connect.php'); 

$resultproperty = $con->query("Select property_type from property");
$result = $con->query( "SELECT * FROM state ORDER BY state_name");
$resultcatagory=$con->query("select property_catagory from property");


?>







<!DOCTYPE html>
<html lang="zxx">

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
   
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
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
    <!-- font-awesome icons -->
    <link href="css2/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts1.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
                <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item active  mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="customerhome.php">Home
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

            </div>
        </div>
        <!-- //banner text -->
    </section>
    <div class="row mt-4">
        <div class="col-lg-8 mx-auto">
            <h5 class="cont-form">Add Property</h5>
            <div class="contact-form-wthreelayouts">
                <form action="post.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>
                                  Property Name  
                                </label>
                        <input class="form-control" type="text" name="pname" required="">
                    </div>
                    <label>Select Property</label>
                                 
                                
                    <select class="form-control col-md-3 ml-2" name="property">
                            <option>--Property--</option>
                            <?php 
                            
                        $resultproperty = $con->query("Select * from catagory_name");
                        while($rows=mysqli_fetch_assoc($resultproperty))
                        {
                            $propertytype = $rows['cat_name'];
                        ?>
                        <option value="<?php echo $rows['cat_id'];?>"><?php echo $rows['cat_name'];?></option>
                        <?php
                        }
                        ?>
                        </select>
                   

                        <label>Select State</label>
                        <select class="form-control col-md-3 ml-2" name="state" id="state">
                            <option>--state--</option>
                            <?php 
                       while ($rows = $result->fetch_assoc())
                       {
                       $state_name = $rows[ 'state_name' ];
                       $state_id = $rows[ 'state_id' ];
                        ?>
                        <option value="<?php echo $state_id; ?>"><?php echo $state_name; ?></option>
                        <?php } ?>

                        </select>

                        <label>Select City</label>
                        <select class="form-control col-md-3 ml-2 margin= "auto"  id="city"name="city">
                            <option>----city----</option>
                        </select>

                        <div class="form-group">

                        <label>Select Catagory</label>
                         
                        

                    <select class="form-control col-md-3 ml-2" name="property_catagory">
                            <option value="">--Select--</option>
                            <option value="Buy">Buy</option>
                            <option value="Rent">Rent</option>
                            <option value="Lease">Lease</option>
                           
                        </select></div> 

                        <div>
                  <label>Geo Location <span>(optional)</span></label>
                  <a onclick="showMap()" href="javascript:void(0);" id="close_map">X</a>
                      <div id="sp_map">
                      </div>
                      <input type="text" id="latlng_location" onclick="showMap()" name="geo_location" class="form-control" placeholder="Geo Location" required>
                  </div>


                    <div class="form-group">
                        <label>
                                  Date 
                                </label>
                        <input class="form-control" type="text" name="date" required="">
                    </div>

                    <div class="form-group">
                        <label>
                                    Description
                                </label>
                        <textarea name="des" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                                   Total Area
                                </label>
                        <input class="form-control" type="text" name="area" required="">
                    </div>
                    <div class="form-group">
                        <label>
                                   Total Rooms
                                </label>
                        <input class="form-control" type="text" name="room" required="">
                    </div>
                    <div class="form-group">
                        <label>
                                   Property cost
                                </label>
                        <input class="form-control" type="text" name="cost" required="">
                    </div>
                    

                    
                   
                    <div class="form-group">
                        <label>
                                  Upload Image
                                </label>
                        <input type="file" name="image">

                    </div>

                   







                    <div class="form-group">
                        <input type="submit" name="submit" value="SUBMIT">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- //banner -->
    <!-- about-->

    <!-- //about -->
    <!-- explore-->



    <!-- //blog -->
    <!-- footer -->

    <!-- // register -->
    <!-- js -->
<script type="text/javascript">
  function showMap()
  {
    var mapx = document.getElementById('sp_map');
    var close = document.getElementById('close_map');
    if (mapx.style.display === "none")
    {
      mapx.style.display = "block";
      close.style.display= "block";
    }
    else
    {
      mapx.style.display = "none";
      close.style.display = "none";
    }
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTVkDsqwjNPrOmepEyO4jQMRpPzF0CvWg&callback=initMap">
</script>


<script>
// Initialize and add the map
function initMap()
{
  var lati_tude = 11.2945845;
  var longi_tude= 75.8410562;
  var myLatlng = {lat: lati_tude, lng: longi_tude};
        var map = new google.maps.Map(document.getElementById('sp_map'), {
          zoom: 2,
          center: myLatlng
        });
        var marker = new google.maps.Marker({
          map: map,
          title: 'Click to zoom'
        });
        marker.addListener('click', function() {
          map.setZoom(14);
          map.setCenter(marker.getPosition());
        });
        google.maps.event.addListener(map, 'click', function(event)
        {
          placeMarker(event.latLng);
          lati_tude = event.latLng.lat();
          longi_tude = event.latLng.lng();
          document.getElementById('latlng_location').value=lati_tude+','+longi_tude;
        });
        function placeMarker(location) {
  if ( marker ) {
    marker.setPosition(location);
  } else {
    marker = new google.maps.Marker({
      position: location,
      map: map
    });
  }
}
  }
    </script>






    <script src="js1/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- explore responsive slider -->
    <script src="js1/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $(".slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- script for password match -->
    <script>
        window.onload = function() {
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
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
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
        $(document).ready(function() {
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