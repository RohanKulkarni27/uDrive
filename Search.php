<?php
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
    #home{
        height:80vh !important;
    }
    .resultDiv{
        text-align:left;
        margin-left:10px;
    }
    #about{
        padding-top:0px !important;
        padding-bottom:0px !important;
    }
    
</style>
<script>
     function openDetailPage(id){
            window.location.href = "http://localhost/U_Drive_new/CarDetails.php?vehicleId="+id;
        }
</script>
</head>
<body>



<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
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

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="./whistlist_page.php" class="smoothScroll">Open Whistlist</a></li> 
                  <li><a href ="./MembershipManagement.html" class="smoothScroll">Manage Account</a></li>
                  <li><a href="./Sign_In.html" class="smoothScroll">Log Out</a></li> 
               </ul>
          </div>

     </div>
</div>


<!-- HOME -->
<section id="home" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                        <h3 style="color:#ffffff;">Search for your desired car</h3>
                        <form  method="POST">
                            <div class="form-group" >
                                <input type="text" class="form-control" name="carname" placeholder="Enter the car name">
                            </div>
                            <ul class="section-btn">
                              <button style="background-color:#000000;border:none;" name="search" class="smoothScroll"><span data-hover="Search">Search</span></button>
                         </ul>
                       
                    </div>
                </div>
   

          </div>
     </div>

     <!-- Video -->
     <video controls="" autoplay="" loop="" muted>
          <source src="videos/video.mp4" type="video/mp4">
          Your browser does not support the video tag.
     </video>
</section>

<section id="about" class="parallax-section">
    
        <div class="row">
            <div class="col-md-3 col-sm-6 resultDiv">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h2>Filter</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <label>Location</label>
                        <select name="location">
                              <?php
                                $sql = "Select * from T_Location";
                                $result = mysqli_query($conn,$sql);
                                $queryresults = mysqli_num_rows($result);
                                if($queryresults>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '<option>'.$row["U_Street"].'</option>';
                                    }
                                }

                              ?>
                        </select> 
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label>Availabilty</label>
                        <select name="availability">
                        <option value="all">All</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
            </div>
            </form>
            <div class="col-md-7 col-sm-6">
            <?php
                    if(isset($_POST['search'])){
                        $car = mysqli_real_escape_string($conn,$_POST['carname']);
                        $availability = mysqli_real_escape_string($conn,$_POST['availability']);
                        if($availability=='yes'){
                                $availableVariable = 1;
                        }
                        else{
                            $availableVariable = 0;
                        }
                        $sql = "Select * from T_VehicleType where vehT_name LIKE '%$car%' and vehT_availability='$availableVariable'";
                        
                        $result = mysqli_query($conn,$sql);
                        $queryresults = mysqli_num_rows($result);
                       
                        if($queryresults>0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<div class='cards'>";
                                echo '<div class="image"><img class="img-responsive" src="./images/'.$row['image_title'].'.jpg" width="250" height="200"></div>';
                                    echo '<div class="details">';
                                    echo "<div class='carname'><span>".$row['vehT_name']."</span></div>";
                                        echo "<div class='otherdetails'><i class='fa fa-money' style='color:#4dc47d;font-size:20px'></i><span>Deposit:</span> <span>$".$row['vehT_deposit']."</span></div>";
                                        echo "<div class='otherdetails'><i class='fa fa-usd' style='color:#4dc47d;font-size:20px' aria-hidden='true'></i><span>Cost per hour:</span> <span>$".$row['vehT_costPerHr']."</span></div>";
                                        if($availableVariable==1){
                                            echo "<div class='otherdetails'><span>Availability:Yes</span></div>";
                                        }
                                        else{
                                            echo "<div class='otherdetails'> <span>Availability: </span><span>Waiting</span></div>";
                                        }
                                      //  echo "<div class='viewdetail' onclick='openDetailPage(".$row['vehT_id'].")'><span>View Details >></span></div>";
                                        echo "<ul class='section-btn btnClass'>";
                                        echo "<button style='background-color:#ffffff;border:none;' onclick='openDetailPage(".$row['vehT_id'].")' name='search' class='smoothScroll'><span data-hover='View Info'>View Info</span></button>";
                                        echo "</ul>";
                                    echo '</div>';   
                                echo "</div>";
                            }
                        }
                    }
                    else{
                        $sql = "Select * from T_VehicleType";
                        $result = mysqli_query($conn,$sql);
                        
                        $queryresults = mysqli_num_rows($result);
                        if($queryresults>0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<div class='cards'>";
                                echo '<div class="image"><img class="img-responsive" src="./images/'.$row['image_title'].'.jpg" width="250" height="200"></div>';
                                    echo '<div class="details">';
                                    echo "<div class='carname'><span>".$row['vehT_name']."</div>";
                                        echo "<div class='otherdetails'><i class='fa fa-money' style='color:#4dc47d;font-size:20px'></i><span>$".$row['vehT_deposit']."</span></div>";
                                        echo "<div class='otherdetails'><i class='fa fa-usd' style='color:#4dc47d;font-size:20px' aria-hidden='true'></i><span>Cost per hour:</span> <span>$".$row['vehT_costPerHr']."</span></div>";
                                        if($row['vehT_availability']==1){
                                            echo "<div class='otherdetails'><span>Availability:Yes</span></div>";
                                        }
                                        else{
                                            echo "<div class='otherdetails'><span>Availability: </span><span>Waiting</span></div>";
                                        }
                                       // echo "<div class='viewdetail' onclick='openDetailPage(".$row['vehT_id'].")'><span>View Details >></span></div>";
                                        echo "<ul class='section-btn btnClass'>";
                                        echo "<button style='background-color:#ffffff;border:none;' onclick='openDetailPage(".$row['vehT_id'].")' name='search' class='smoothScroll'><span data-hover='View Info'>View Info</span></button>";
                                        echo "</ul>";
                                    echo '</div>';   
                                echo "</div>";
                            }
                        }
                    }
                        
                    ?>
            </div>
        </div>
  
</section>
<!-- Results -->
<!--<section id="search" class="parallax-section">
   
</section>-->

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