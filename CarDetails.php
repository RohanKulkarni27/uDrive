<?php

//echo $id;
include 'includes/database.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>U-Drive</title>

<!--

Template 2099 Scenic

http://www.tooplate.com/view/2099-scenic

-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/tooplate-style.css">
<link rel="stylesheet" href="css/NewMain.css">
<style>
    .detailDiv{
        text-align:left;
        border:solid 1px #dddddd;
        padding:10px;
    }
    .detailDiv h1{
        text-align:center;
    }
    .bookBTN{
        width:14%;
        text-align:center;
    }
    #about{
        padding-top:150px !important;
        padding-bottom:0px !important;
    }
    .carValues{
        font-size:18px;
        color:#000000;
        padding-left:5px;
    }
</style>
<script>
      function openWishListPage(id){
            window.location.href = "http://localhost/U_Drive_new/actions/whislist.php?vehicleId="+id;
        }
        function openBookingPage(id){
            window.location.href = "http://localhost/U_Drive_new/BookingPage.php?vehicleId="+id;
        }
</script>
</head>
<body>

<!-- MENU -->
<div style="background-color:#5cb85c"  class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="index.html" class="navbar-brand">U-Drive</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="./whistlist_page.php" class="smoothScroll">Open Whistlist</a></li>
                 <li><a style="color:#ffffff" href="./Sign_In.html" class="smoothScroll">Log Out</a></li> 
                             
               </ul>
          </div>

         

     </div>
</div>

<section id="about" class="parallax-section">
    <div class="container">
        <div class="row">
            
            <?php
           
                $id=$_GET['vehicleId'];
                $sql = "Select * from T_VehicleType where vehT_id ='$id'";
                $result = mysqli_query($conn,$sql);
                $queryresults = mysqli_num_rows($result);
                if($queryresults>0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='col-md-5 col-sm-6'>";
                        echo "<div style='height:80px;'></div>";
                        echo "<img class='img-responsive ' width='400' height='400' src='./images/".$row['image_title'].".jpg'>";
                        echo "</div>";
                    }
                }
                $sql2 = "select T_Vehicle_Details.*,T_VehicleType.* FROM T_Vehicle_Details INNER JOIN T_VehicleType ON T_VehicleType.vehT_id = T_Vehicle_Details.vehd_Vid WHERE T_VehicleType.vehT_id = '$id'";
                $result2 = mysqli_query($conn,$sql2);
                $queryresults2 = mysqli_num_rows($result2);
                if($queryresults2>0){
                    while($row = mysqli_fetch_assoc($result2)){
                        
                        echo "<div class='col-md-7 col-sm-6 detailDiv'>";
                        echo "<h1 class='carTitle'>".$row['vehT_name']."</h1>";
                        echo "<p>Vehicle Registration:<span class='carValues'>".$row['vehD_regNo']."</span></p>";
                        echo "<p>Vehicle Reading:<span class='carValues'>".$row['vehD_meterReading']." miles</span></p>";
                        echo "<p>Deposit:<span class='carValues'>$".$row['vehT_deposit']."</span></p>";
                        echo "<p>Rate per hour:<span class='carValues'>$".$row['vehT_costPerHr']."</span></p>";
                        echo "<p>Availability:<span class='carValues'>".$row['vehD_availability']."</span></p>";
                        echo "<div class='bookBTN'> <button type='submit' name='submit' onclick='openBookingPage(".$row['vehT_id'].")' class='btn btn-success btn-block'>Book</button>";
                        echo " <button type='submit' name='whislist' onclick='openWishListPage(".$row['vehT_id'].")' class='btn btn-success btn-block'>Add to whislist</button></div>";
                        echo "</div>";
                        
                    }
                }
            ?>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer style="background-color:#e6e6e6;">
     <div class="container">
          <div class="row">

               <div class="col-md-5 col-sm-6">
                    <h2>U-Drive Studio</h2>
                    <p>1 Pace Plaza<br> New York City,<br> New York - 10038</p>
                    
                    
               </div>

               <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                    	<h2>Keep in touch</h2>
                         <p><a href="tel:010-090-0780">+1 551-225-9238</a></p>
                         <p><a href="mailto:info@company.com">info@company.com</a></p>
                         <p><a href="#">Our Location</a></p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-12">
               		
    
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                    
               </div>

               <div class="clearfix"></div>

               <div class="col-md-12 col-sm-12">
                    <div class="copyright-text">
                         <p>Copyright © 2018 U-Drive</p>
                    </div>
               </div>
               
          </div>
     </div>
</footer>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>
</body>
</html>