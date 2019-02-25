<?php
session_start();
if(isset($_POST['submit'])){
    include 'database.inc.php';
    if(isset($_POST['Checkbox'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $sql = "select * from t_Admin where username='$email'";
        $result = mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);
        if($resultcheck<1){
            echo "Username doesn't exist";
            exit();
        }
        else{
            $row = mysqli_fetch_assoc($result);
            if($row['password']==$password){
                $_SESSION['first']=$row['username'];
                header("Location:../Admin_dashboard.php");
                exit();
            }
            else{
                echo "Password entered wrong";
                exit();
            }
        }
    }

    else{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = "select * from t_Customer where cust_email='$email'";
    $result = mysqli_query($conn,$sql);
    $resultcheck=mysqli_num_rows($result);
    if($resultcheck<1){
        echo "Username doesn't exist";
        exit();
    }
    else{
        $row = mysqli_fetch_assoc($result);
        if($row['cust_password']==$password){
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['first']=$row['cust_fname'];
            header("Location:../search.php");
            exit();
        }
        else{
            echo "Password entered wrong";
            exit();
        }
    }
    }
    
}
?>