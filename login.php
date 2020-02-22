<?php


include "connect.php";
session_start();
/*if ($_SESSION['usertype'] == 'admin') {

  header("location: adminhome.php");

} elseif($_SESSION['usertype'] == 'user')
{
    header("location: customerhome.php");
} else
{
    header("location: login.php");
}*/

   
 if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $strQuery="SELECT * FROM login WHERE username='$username' AND password='$password'";
        $res1=mysqli_query($con,$strQuery);


         if(mysqli_num_rows($res1)>0)
        {
             $row=mysqli_fetch_array($res1);
          
            $type=$row['usertype'];           

            $email=$row['username'];
        
            $lid=$row['id'];
            $_SESSION['id']=$lid;
            $_SESSION['usertype']=$type;
            $_SESSION['username']=$email;
        
            if($type=='user')
            {
                $_SESSION['id']=$username;
                header("location:customerhome.php");
            }
            
            else if($type=='admin')
             {
                  $_SESSION['id']=$username;
                 header("location:adminhome.php");                     
           
             }
             

        }
    }
        else
        {

            ?>
        <script type="text/javascript">
           // alert("Your username or password doesn't exist");
            window.location="login.php";
        </script>
       <?php
    }

?>

<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<!-- Head -->

<head>

    <title></title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->

    <link href="css1/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Style -->
    <link rel="stylesheet" href="css1/style.css" type="text/css" media="all">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->

<body>

    <h1>

        <br>
    </h1>

    <div class="w3layoutscontaineragileits">
        <h2>Login here</h2>
        <form action="" method="post">
            <input type="text" name="username" placeholder="USER NAME" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">

            <div class="aitssendbuttonw3ls">
                <input type="submit" name="submit" value="LOGIN">

                <div class="clear"></div>
            </div>
        </form>
    </div>

    <!-- for register popup -->
    <div id="small-dialog1" class="mfp-hide">
        <div class="contact-form1">
            <div class="contact-w3-agileits">
                <h3>Register Form</h3>
                <form action="register.php" method="post">
                    <div class="form-sub-w3ls">
                        <input placeholder="User Name" type="text" name="name" required="">
                        <div class="icon-agile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-sub-w3ls">
                        <input placeholder="Email" class="mail" type="email" name="email" required="">
                        <div class="icon-agile">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-sub-w3ls">
                        <input placeholder="Password" type="password" name="password" required="">
                        <div class="icon-agile">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-sub-w3ls">
                        <input placeholder="Confirm Password" type="password" name="cpassword" required="">
                        <div class="icon-agile">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="submit-w3l">
                        <input type="submit" value="Register" name="register">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //for register popup -->




    <script type="text/javascript" src="js1/jquery-2.1.4.min.js"></script>

    <!-- pop-up-box-js-file -->
    <script src="js1/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--//pop-up-box-js-file -->
    <script>
        $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>

</body>
<!-- //Body -->

</html>