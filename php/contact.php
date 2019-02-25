<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST['sendEmail'])){
$mail = new PHPMailer();
if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['message'])  ) {
 
  $mail->SMTPDebug = 1;
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->Username = "kulkarni.rohan619@gmail.com";
  $mail->Password = "Reddevil@20";
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  $mail->From = "kulkarni.rohan619@gmail.com";
  $mail->FromName = $_POST['subject'];
  $mail->addAddress($_POST['email']);
  $mail->isHTML(true);
  $mail->Subject = $_POST['subject'];
  $mail->Body = $_POST['message'];
  
 if($mail){
   echo "Success";
 }
 else{

echo $mail->ErrorInfo;
 }
  //      ^
  //  Replace with your email 
}
}
?>