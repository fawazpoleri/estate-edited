

<?php
include "connect.php";
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
                            <a class="nav-link" href="adminhome.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                       
                       <li class="nav-item mr-lg-3 mt-lg-0 mt-3">
                            <a class="nav-link" href="addproperty.php">ADD PROPERTY</a>
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
                <h1><marquee direction="left">Add New Catagory Type </marquee></h1></div>
                <h3 class="home-banner-w3"> </h3>
              
                
            </div>
        </div>
        <!-- //banner text -->
    </section>


<!-- city insert form -->


<br><br><br><br><br>
<section class="page-section categories-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0.9s">
				<div class="row">
					
					<div class="col-sm-4">
                        <h1>Add New Catagory Name</h1><br>
                        <br>
						<form  method="POST" action="addcatname.php" autocomplete="off">



                       
                        
                        <div class="form-group">
                        
                        <input type="text" class="form-control" name="catname"  required pattern="[a-zA-Z0-9\s]{1,20}" placeholder="Catagory Name">
							</div>


                                        
							
							<div class="form-group">
								<input type="submit" name="addcatname"  class="form-control btn btn-success" value="Add">
							</div>
						</form>
					</div>


<!-- ---------------  view city list------- -->

					<div class="col-md-8">
						<h1>View Catagory Name</h1>
						<table class="table">
							<tr>
                               
                                <th>Catagory No.</th>
								<th>Catagory Name</th>
								<th>Remove Catagory</th>
							</tr>
							<?php 
							
							$sq=mysqli_query($con,"SELECT * FROM catagory_name");
							if(mysqli_num_rows($sq))
							{
								while($res=mysqli_fetch_array($sq))
								{
								?>

								
								<tr>
                                    
                                    <td><?php echo $res['cat_id'];?></td>
                                    
									
									<td><?php echo $res['cat_name'];?></td>
                                    
                                    <td> <a href="deletecattype.php?id=<?php echo $res['cat_id'];?>"><button type="button" class="btn btn-danger" >DELETE</button></a></td>
									
								</tr>
								<?php }
							}


								?>
								
							
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
 </table>

    </br></br></br></br>
 
			
    </br>
    
    
    
    </br></br></br></br></br></br></br>



</body>
</html>




