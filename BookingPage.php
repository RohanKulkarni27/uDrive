<?php

//echo $id;
include 'includes/database.inc.php';
require_once('./config.php'); 
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
        width:20%;
        text-align:center;
        padding-bottom:10px;
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
$(document).ready(function(){
    $(".TotalPrice").css("display","none");
    $( function() {
    $( "#datepicker" ).datepicker();
    $("#datepicker2").datepicker();
  } );
  $("#totalcalc").click(function(){
    $(".TotalPrice").css("display","block");
      var deposit = $("#deposit").text();
      var perhour = $("#perhour").text();
      var new_perhour = parseInt(perhour) * 2;
      var total = parseInt(deposit)+new_perhour;
      $("#amount").append(total);
  })
})
function openBookingPage(vehID){
    var id = vehID;
    window.location.href = "http://localhost/U_Drive_new/charge_index.php?id="+id
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
                        echo "<p>Deposit:<span class='carValues'>$</span><span class='carValues' id='deposit'>".$row['vehT_deposit']."</span></p>";
                        echo "<p>Rate per hour:<span class='carValues'>$</span><span class='carValues' id='perhour'>".$row['vehT_costPerHr']."</span></p>";
                        echo "<p>Availability:<span class='carValues'>".$row['vehD_availability']."</span></p>";
                        echo "<p>Start Date: <input type='text' id='datepicker'></p>";
                        echo "<p>End Date: <input type='text' id='datepicker2'></p>";
                        echo "<div class='bookBTN'> <button type='submit' name='submit' id='totalcalc' class='btn btn-success btn-block'>Calculate Total</button></div>";
                        echo "<div class='TotalPrice'>Total Price will be:$ <span id='amount'></span> </div>";
                       
                        echo "<div class='bookBTN'> <button  onclick='openBookingPage(".$row['vehT_id'].")' type='submit' name='submit' class='btn btn-success btn-block'>Book</button></div>";
                       
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