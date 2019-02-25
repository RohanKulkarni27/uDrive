<?php
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/SMTP.php';
require 'vendor/autoload.php';
if(isset($_POST['sendEmail'])){
$mail = new PHPMailer\PHPMailer\PHPMailer(true);
try {
echo "Hello";
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->Username = "kulkarni.rohan619@gmail.com";
  $mail->Password = "Reddevil@20";
  $mail->SMTPSecure = "false";
  $mail->Port = 465;
  $mail->setFrom ("kulkarni.rohan619@gmail.com","Rohan");

  $mail->addAddress("kulkarni.rohan619@gmail.com","Rohan");
  $mail->isHTML(true);
  $mail->Body = "Hi";
  $mail->Subject = "Hello";

  $mail->send();

  //      ^
  //  Replace with your email 
}
catch (Exception $e) {
  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}

?>