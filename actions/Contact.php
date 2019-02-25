<?php
if(isset($_POST['submit'])){
include '../includes/database.inc.php';

$email = mysqli_real_escape_string($conn,$_POST['email']);
$name = mysqli_real_escape_string($conn,$_POST['firstName']);
$issueType = mysqli_real_escape_string($conn,$_POST['issue']);
$Detail = mysqli_real_escape_string($conn,$_POST['details']);
$Token=rand(10,1000);
$issueToken = mysqli_real_escape_string($conn,$Token);


$curl = curl_init();
						$link = "http://akshaymore.net/udriveEmail.php?mailTo=".str_replace('@','%40',$_POST['email'])."&name=".$_POST['firstName']."&issueType=".$_POST['issue']."&details=".$_POST['details']."&token=".$Token;
 							curl_setopt_array($curl, array(
							CURLOPT_URL => str_replace(' ', '%20', $link),
							CURLOPT_RETURNTRANSFER => true,
							CURLOPT_ENCODING => "",
							CURLOPT_MAXREDIRS => 10,
							CURLOPT_TIMEOUT => 30,
							CURLOPT_FOLLOWLOCATION => 1,
							CURLOPT_SSL_VERIFYHOST => false,
							CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							CURLOPT_CUSTOMREQUEST => "GET",
							));
							$response = curl_exec($curl);
							$err = curl_error($curl);
							curl_close($curl);

$sql = "INSERT INTO T_Issue(TokenID,Username,Name,Issue_Type,Issue_Detail)"
    . "VALUES('$issueToken','$email','$name','$issueType','$Detail')";
     mysqli_query($conn,$sql);
     header("Location:../index.html");
}
?>