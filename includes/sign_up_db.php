<?php
if(isset($_POST['submit'])){
    include_once 'database.inc.php';
    $Suffix = mysqli_real_escape_string($conn,$_POST['Suffix']);
    $First_Name = mysqli_real_escape_string($conn,$_POST['First_Name']);
    $Last_Name  = mysqli_real_escape_string($conn,$_POST['Last_Name']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $Street_Name =mysqli_real_escape_string($conn,$_POST['Street_Name']);
    $number =mysqli_real_escape_string($conn,$_POST['number']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $State = mysqli_real_escape_string($conn,$_POST['State']);
    $Zip_Code = mysqli_real_escape_string($conn,$_POST['Zip_Code']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = "INSERT INTO t_Customer(cust_fname,cust_lname,cust_suffix,cust_phno,cust_email,cust_gender,cust_street,cust_city,cust_state,cust_zip,cust_password)"
    . "VALUES('$First_Name','$Last_Name','$Suffix','$number','$email','$gender',' $Street_Name','$city',' $State','$Zip_Code','$password')";
     mysqli_query($conn,$sql);
   //  header("Location:../Sign_In.html?login=success");
   echo "Account created";
}
?>
