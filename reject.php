<?php
include("connect.php");
include 'PHPMailer/PHPMailerAutoload.php';

$app = $_GET['id'];
$qq=mysqli_query($con,"select * from register where id='$app'");
if(mysqli_num_rows($qq) >0)
        {

            while($row1=mysqli_fetch_array($qq))
            	{
            		$a=$row1['id'];
                    $mail=$row1['email'];

            
if($qq)
{
$query1 = mysqli_query($con,"UPDATE register SET status = 0 where id=$app ");
$query1 = mysqli_query($con,"UPDATE register SET staT = 'REJECTED/PENDING' where id=$app ");


$mail = new PHPMailer;
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vishnu.futura@gmail.com';                   // SMTP username
$mail->Password = 'Kannanmon123';               // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 465;       
/*$mail->SMTPDebug = 2;*/                             //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('vishnu.futura@gmail.com', 'LandMark');     //Set who the message is to be sent from
$mail->addAddress($mail);                                              //('vishnuvikramt.vv@gmail.com'); 

$mail->WordWrap = 50;                                  
        
$mail->isHTML(true);                                   
 
//$mail->subject = 'Enquiry Details';
$mail->Body    = "
<table class='table table-condensed' style='background-color: #f85fae ;border: 4px solid #f31386;width: 23%;text-align: center;margin: auto;padding: 20px;margin-top: 29px;''>

    <tbody>
    <p>Your Registration is rejected</p>
    </tbody>
    </table>";
  $mail->AltBody = 'msg';
 
  if(!$mail->send()) 
  {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
     exit;
  }

  else
  {
    echo "<script>alert('Message has been sent');</script>";
    echo "<script>window.history.back();</script>";
    
  }

}
	}
            }


            if($status==1)
            {
             echo"approved";
            }
header("location:adminviewuser.php");
?>
