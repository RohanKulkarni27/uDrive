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
                        echo "<div class='col-md-3 col-sm-6'>";
                        echo "<img class='img-responsive' src='./images/".$row['image_title'].".jpg'>";
                        echo "</div>";
                    }
                }
            ?>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
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