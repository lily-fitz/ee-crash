<?php
session_start();
if(isset($_POST['emailadd'])) {
  $userEmail = $_POST['useremail'];

  //$to = "lilymfitz@gmail.com";
  $to = "lily@jaxcode.com";
  $body = "";

  $body .= "Email: ".$userEmail. "\r\n";
  $subject = "EECrash Form";
  $headers = "From: donotreply@jaxcode.com";

mail($to,$subject,$body,$headers);


  

if(isset($_POST['bottomform'])) {
$_SESSION['message2'] = 'ok';
header("location: index.php#bottomform");

} else {
$_SESSION['message'] = 'ok';
header("location: index.php#thankyou");

}

  
}



?>

