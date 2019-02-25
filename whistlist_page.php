<?php
include 'includes/database.inc.php';
?>
<html>
    <head>
        <title>Whistlist</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/tooplate-style.css">     
        <link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<script>
    function selectedID(clickedID){
      var id=  clickedID;
      window.location.href = "http://localhost/U_Drive_new/reserve_remove.php?vehicleId="+id;
    }
</script>
    </head>
    <body>
        <!-- MENU -->
        <div style="background-color:#5cb85c" class="navbar headbar navbar-fixed-top" role="navigation">
				<div class="container">
	 
						 <!-- NAVBAR HEADER -->
						 <div class="navbar-header">
									<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
											 <span class="icon icon-bar"></span>
											 <span class="icon icon-bar"></span>
											 <span class="icon icon-bar"></span>
									</button>
									<!-- lOGO -->
									<a href="index.html" class="navbar-brand" style="color:#ffffff;">U-Drive</a>
						 </div>
                         <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    
                                    <li><a style="color:#ffffff" href="./Sign_In.html" class="smoothScroll">Log Out</a></li> 
                                </ul>
                        </div>
	            </div>
        </div>
    
                <div style="margin-top:5%;" class="container background">
                        <div class="container">
                            <div class="row">
                            
                                <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
                                    <table class="table">
                                        <tr>
                                            <th scope="col">Vehilce ID</th>
                                            <th scope="col">Vehicle Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        <tbody>
                                        <?php
                                    
                                            $sql = "Select * from T_Whislist";
                                            $result = mysqli_query($conn,$sql);
                                            $queryresults = mysqli_num_rows($result);
                                            if($queryresults>0){
                                                while($row = mysqli_fetch_assoc($result)){
                                                    echo "<tr>";
                                                    echo "<td>".$row['Vehicle_ID']."</td>";
                                                    echo "<td>".$row['Vehicle_Name']."</td>";
                                                    echo "<td ><input id='".$row['Vehicle_ID']."' type='submit' value='Remove' onclick='selectedID(this.id);' name='Remove'></td>";
                                                    echo "</tr>";
                                                }
                                            }
                                
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                </div> 
  
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