<!DOCTYPE html>
<html lang="en">
<head>

<title>Sign Up</title>

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

</head>
<body>
	
	 
	 
	 <!-- MENU -->
	 <div class="navbar headbar navbar-fixed-top" role="navigation">
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
	<section id="contact" class="parallax-section">
		<div class="container">
				 <div class="row">

							<div class="col-md-offset-3 col-md-6 col-sm-12">
									 <div class="section-title">
												<h1 style="color:#ffffff">Open the account here!</h1>
									 </div>
							</div>

							<div class="clearfix"></div>

							<div class="col-md-offset-2 col-md-8 col-sm-12">
									 <!-- CONTACT FORM HERE -->
									 <form id="contact-form" action="./includes/sign_up_db.php" method="post" enctype="multipart/form-data">

												<!-- IF MAIL SENT SUCCESSFULLY -->
												<div class="form-group inputClass" >
													<label>Suffix:</label>
													<select name="Suffix">
															<option value="Mr">Mr.</option>
															<option value="Ms">Ms.</option>
															<option value="Mrs">Mrs.</option>
													</select>    
											</div>
											<div class="form-group" >
												<input type="text" class="form-control" name="First_Name" placeholder="First Name" required>
											</div>
										 <div class="form-group">
															
															<input type="text" class="form-control" name="Last_Name" placeholder="Last Name" required>
											</div>
											<div class="form-group">
															
															<input type="text" class="form-control" name="number"  placeholder="Number" required>
											</div>
											<div class="form-group inputClass">
															<label>Gender:</label>
															<select name="gender">
																<option value="male">Mr.</option>
																<option value="female">Ms.</option>
																
														</select>     
											</div>
											<div class="form-group" >
													<label>Street Name:</label>
													<input type="text" class="form-control" name="Street_Name" placeholder="Street Name" required>
											</div>
											<div class="form-group">
															<label>City:</label>
															<input type="text" class="form-control" name="city"  placeholder="City" required>
											</div>
											<div class="form-group">
															<label>State:</label>
															<input type="text" class="form-control" name="State"  placeholder="State" required>
											</div>
											<div class="form-group">
															<label>Zip Code:</label>
															<input type="text" class="form-control" name="Zip_Code"  placeholder="Zip Code" required>
											</div>
											<div class="form-group">
															<label>E-mail:</label>
															<input type="email" class="form-control" name="email"  placeholder="email" required>
											</div>
											<div class="form-group">
															<label>Password:</label>
															<input type="password" class="form-control" name="password"  placeholder="password" required>
											</div>
										 <!--<div class="form-group" style="background-color:none !important;">
															<label>Upload a copy of license:</label>
															<input type="file" class="form-control" placeholder="password" required>
											</div>-->
											<button type="submit" name="submit" class="btn btn-success btn-block">Create Account</button>
									 </form>
							</div>

				 </div>
		</div>
</section>
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
</body>

</html>
