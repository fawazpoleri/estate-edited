
<?php

        include "connect.php";
        session_start();
         $user=$_SESSION['id'];
         

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Land mark</title>
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
                            <a class="nav-link" href=".php"></a>
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
                <h1><marquee direction="left">View Notification </marquee></h1></div>
                <h3 class="home-banner-w3"> </h3>
              
                
            </div>
        </div>
        <!-- //banner text -->
    </section>


<!-- city insert form -->


<br><br>

 </table>
                    
                       
 </table>
                            <div class="container">

                        <h1>Feedback</h1>
                        <table class="table table-hover" border="2" align="center">
                            <tr>
                                <th>Your Message</th>
                                <th>New Message</th>
                               
                                
                               
                            </tr>
                            <?php 
                            
                            $sq=mysqli_query($con,"SELECT intrest,message FROM Feedback where user='$user'");
                            if(mysqli_num_rows($sq))
                            {
                                while($res=mysqli_fetch_array($sq))
                                {
                                ?>

                                
                                <tr>
                                    
                                    <td><?php echo $res['intrest'];?></td>
                                     <td><?php echo $res['message'];?></td>

                                    
                                
                                </tr>
                                <?php }
                            }


                                ?>
                                
                            
                        </table>
                    </div>

    
    
    
    </br></br></br></br></br></br></br>



</body>
</html>




