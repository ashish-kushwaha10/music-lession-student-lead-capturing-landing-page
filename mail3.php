<?php



$userName = $_POST['name'];
$userLesson = $_POST['dropdown'];
$userEmail = $_POST['email'];
$userMobileNo = $_POST['mobileNo'];

$to = "info@kmusicacademypasadena.com";

$subject = "Google KMusic Leads ";

$body .= "From: ".$userName. "\r\n"; 
$body .="userLesson: ".$userLesson. "\r\n";
$body .= "Email: ".$userEmail. "\r\n"; 
$body .= "MobileNo: ".$userMobileNo. "\r\n";

$headers = "From: marketing@itpluto.com" . "\r\n" .
"CC: info.itpluto@gmail.com";


 //if($email!=NULL){
    mail($to,$subject,$body,$headers);

 //}


//redirect page
 header("Location:thankyou.html");






?>